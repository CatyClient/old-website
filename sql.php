<?php

$db_file = 'database.db';

if (!file_exists($db_file)) {
    try {
        $db = new PDO('sqlite:' . $db_file);

        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = "CREATE TABLE IF NOT EXISTS user_list (user_id INTEGER PRIMARY KEY AUTOINCREMENT, last_connection TEXT, username_list TEXT NOT NULL, last_ipaddr TEXT NOT NULL, ac_status INTEGER, ac_group INTEGER, device_id INTEGER, report_count INTEGER, caty_key TEXT, ban_reason TEXT)";
        $db->exec($query);

        echo "sql created successfully !!\n";

        $db = null;
    } catch (PDOException $e) {
        echo "Error PDO: " . $e->getMessage();
        die();
    }
} else {
    echo "your fucking file and already create.\n";
}

?>
