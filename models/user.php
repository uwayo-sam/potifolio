<?php

include "./db.php";
//user database model


 
class User {
    private $db;
    
    public function __construct() {
        global $conn;
        $this->db = $conn;
    }

    /**
     * Create a new user
     * @param string $fname First name
     * @param string $lname Last name
     * @param string $email Email address
     * @param string $password Password
     * @param string $avatar_url Avatar URL
     * @return bool True if successful, false otherwise
     */
    public static function create($fname, $lname, $email, $password, $avatar_url) {
        try {
            $db = new User();
            
            // Validate inputs
            if (empty($fname) || empty($lname) || empty($email) || empty($password)) {
                throw new Exception("All fields are required");
            }

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                throw new Exception("Invalid email format");
            }

            // Hash the password
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Use prepared statement to prevent SQL injection
            $stmt = $db->db->prepare("INSERT INTO users (fname, lname, email, password, avatar_url) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("sssss", $fname, $lname, $email, $hashed_password, $avatar_url);
            
            return $stmt->execute();
        } catch (Exception $e) {
            error_log("User creation failed: " . $e->getMessage());
            return false;
        }
    }

    /**
     * Get user by email
     * @param string $email Email address
     * @return array|null User data or null if not found
     */
    public static function getByEmail($email) {
        try {
            $db = new User();
            $stmt = $db->db->prepare("SELECT * FROM users WHERE email = ?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();
            return $result->fetch_assoc();
        } catch (Exception $e) {
            error_log("Error fetching user: " . $e->getMessage());
            return null;
        }
    }

    /**
     * Verify user password
     * @param string $email Email address
     * @param string $password Password
     * @return bool True if password is correct
     */
    public static function verifyPassword($email, $password) {
        $user = self::getByEmail($email);
        if (!$user) {
            return false;
        }
        return password_verify($password, $user['password']);
    }

    /**
     * Update user profile
     * @param int $user_id User ID
     * @param array $data Data to update
     * @return bool True if successful
     */
    public static function updateProfile($user_id, $data) {
        try {
            $db = new User();
            $allowed_fields = ['fname', 'lname', 'avatar_url'];
            $updates = [];
            $types = "";
            $values = [];

            foreach ($data as $key => $value) {
                if (in_array($key, $allowed_fields)) {
                    $updates[] = "$key = ?";
                    $types .= "s";
                    $values[] = $value;
                }
            }

            if (empty($updates)) {
                return false;
            }

            $values[] = $user_id;
            $types .= "i";

            $sql = "UPDATE users SET " . implode(", ", $updates) . " WHERE id = ?";
            $stmt = $db->db->prepare($sql);
            $stmt->bind_param($types, ...$values);
            
            return $stmt->execute();
        } catch (Exception $e) {
            error_log("Profile update failed: " . $e->getMessage());
            return false;
        }
    }
}


User::create("sam","uwayo","sam@gmail","1234","http");