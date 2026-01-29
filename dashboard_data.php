<?php
// dashboard_data.php
header('Content-Type: application/json');

// 1. Database Connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "farmer_portal";



$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    echo json_encode(["error" => "Connection failed"]);
    exit();
}

// 2. Initialize Variables
$data = [
    'farmer_count' => 0,
    'farm_count' => 0,
    'crop_count' => 0,
    'market_count' => 0,
    'farmer_width' => 0,
    'farm_width' => 0,
    'crop_width' => 0,
    'market_width' => 0
];

// 3. Run Queries
// A. Registered Farmers
$result = $conn->query("SELECT COUNT(*) as total FROM farmer");
if ($row = $result->fetch_assoc()) { $data['farmer_count'] = $row['total']; }

// B. Active Farms
$result = $conn->query("SELECT COUNT(*) as total FROM farm");
if ($row = $result->fetch_assoc()) { $data['farm_count'] = $row['total']; }

// C. Unique Crops
$result = $conn->query("SELECT COUNT(DISTINCT crop) as total FROM farm");
if ($row = $result->fetch_assoc()) { $data['crop_count'] = $row['total']; }

// D. Markets (Optional Check)
$result = $conn->query("SELECT COUNT(*) as total FROM market WHERE certificate='Organic'");
if ($result && $row = $result->fetch_assoc()) { $data['market_count'] = $row['total']; }

// 4. Calculate Percentages (for Progress Bars)
$max_farmers = 100; 
$max_farms = 100;
$max_crops = 10;
$max_markets = 50;

$data['farmer_width'] = min(($data['farmer_count'] / $max_farmers) * 100, 100);
$data['farm_width']   = min(($data['farm_count'] / $max_farms) * 100, 100);
$data['crop_width']   = min(($data['crop_count'] / $max_crops) * 100, 100);
$data['market_width'] = min(($data['market_count'] / $max_markets) * 100, 100);

// 5. Return Data as JSON
echo json_encode($data);

$conn->close();
?>