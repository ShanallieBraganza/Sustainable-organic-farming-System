<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Organic Market</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        /* Theme Variables from index.html */
        :root {
            --color-primary: #4CAF50;
            --color-primary-dark: #388E3C;
            --color-secondary: #FFC107;
            --color-bg-light: #F9F9F9;
            --color-block-light: #E8F5E8; /* Light green for blocks */
            --color-text-dark: #2C3E50;
            --color-text-light: #ECF0F1;
            --shadow-subtle: 0 4px 10px rgba(0, 0, 0, 0.05);
            --shadow-hover: 0 8px 15px rgba(0, 0, 0, 0.1);
            --border-radius: 8px;
            --transition: all 0.3s ease;
        }

        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif; /* Changed font */
            margin: 0;
            padding: 0;
            background-color: var(--color-bg-light); /* Light background */
            color: var(--color-text-dark);
            line-height: 1.6;
            overflow-x: hidden;
        }

        header {
            background: var(--color-primary-dark); /* Darker green header */
            color: white;
            padding: 20px 0;
            text-align: center;
            box-shadow: var(--shadow-subtle);
        }

        header h1 {
            margin: 0;
            font-size: 2.5rem;
            font-weight: 600; /* Bolder font */
        }

        header p {
            margin: 10px 0 0;
            font-size: 1.1rem;
            opacity: 0.9;
        }

        .container {
            max-width: 1400px;
            margin: 40px auto;
            padding: 30px;
            background: white;
            border-radius: 10px; /* Consistent border radius */
            box-shadow: var(--shadow-hover); /* More prominent shadow */
            animation: slideIn 0.8s ease-in-out;
        }

        @keyframes slideIn {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        h2 {
            text-align: center;
            color: var(--color-primary-dark); /*Consistent heading color */
            margin-bottom: 30px;
            font-weight: 600; /* Bolder font */
            font-size: 2rem;
        }

        h2::after { /* Add separator from index.html */
            content: ''; position: absolute; bottom: -10px; left: 50%; transform: translateX(-50%);
            width: 80px; height: 3px; background: var(--color-secondary);
        }
        h2 { position: relative; } /* Necessary for ::after pseudo-element */


        .filter {
            text-align: center;
            margin-bottom: 20px;
            padding: 15px;
            background-color: var(--color-block-light); /* Light green background for filter */
            border-radius: 8px;
        }

        .filter select, .filter button {
            padding: 10px;
            border-radius: 6px;
            border: 1px solid #ccc;
            margin: 5px 10px;
            font-family: 'Poppins', sans-serif;
        }

        /* Filter form styling for the PHP output */
        form { 
            text-align: center;
            margin-bottom: 20px;
            padding: 15px;
            background-color: var(--color-block-light); /* Light green background for filter */
            border-radius: 8px;
        }
        form select, form button {
            padding: 10px;
            border-radius: 6px;
            border: 1px solid #ccc;
            margin: 5px 10px;
            font-family: 'Poppins', sans-serif;
        }


        .filter button, form button {
            background: var(--color-primary);
            color: white;
            cursor: pointer;
            transition: var(--transition);
            font-weight: 600;
            border: none;
        }

        .filter button:hover, form button:hover {
            background: var(--color-primary-dark);
            transform: translateY(-1px);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            box-shadow: var(--shadow-subtle);
            border-radius: 8px;
            overflow: hidden; /* For rounded corners on the table */
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            /* Center text for the PHP generated table */
            text-align: center;
        }

        th {
            background-color: var(--color-primary); /* Primary color for header */
            color: white;
            font-weight: 600;
        }

        tr:hover {
            background-color: var(--color-block-light); /* Lighter hover background */
        }

        .no-data {
            text-align: center;
            color: #666;
            font-style: italic;
            padding: 20px;
        }
        
        /* PHP generated table row styles */
        .green {background-color: #d4edda; color: var(--color-primary-dark);}
        .red {background-color: #f8d7da; color: #721c24;}
        
        .no-data, p {
            font-size: 1.1rem;
            text-align: center;
            padding: 15px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background: var(--color-primary);
            color: white;
            text-decoration: none;
            border-radius: 8px; /* Consistent border radius */
            font-size: 1rem;
            font-weight: 600;
            transition: var(--transition);
            margin: 20px 0;
            box-shadow: var(--shadow-subtle);
        }

        .btn:hover {
            background: var(--color-primary-dark);
            transform: translateY(-2px);
            box-shadow: var(--shadow-hover);
        }

        footer {
            background: var(--color-primary-dark); /* Darker footer */
            color: white;
            text-align: center;
            padding: 20px 0;
            margin-top: 40px;
        }

        footer p {
            margin: 0;
            font-size: 0.9rem;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                margin: 20px;
                padding: 20px;
            }
            header h1 {
                font-size: 2rem;
            }
            table {
                font-size: 0.8rem; /* Smaller font for better fit on mobile */
            }
            th, td {
                padding: 8px 10px;
            }
        }
    </style>
</head>
<body>

    <header>
        <h1><i class="fas fa-store"></i> FarmBuddy Market</h1>
        <p>Discover Fresh, Certified Organic Produce from Local Farmers</p>
    </header>

    <div class="container">
        <a href="index.html" class="btn"><i class="fas fa-home"></i> Back to Home</a>
        
        <h2>Available Organic Products</h2> 

<?php
// market.php

// Database connection
$host = "localhost";
$user = "root";
$pass = "";
$db = "farmer_portal";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $contact = $_POST['contact'];
    $location = $_POST['location'];
    $crop = $_POST['crop'];
    $soil = $_POST['soil'];
    $fertilizer_name = $_POST['fertilizer_name'];
    $fertilizer_value = $_POST['fertilizer_value'];
    $sensor_name = $_POST['sensor_name'];
    $sensor_value = $_POST['sensor_value'];
    $water_value = $_POST['water_value'];

    // Fetch crop data to check organic criteria
    $stmt = $conn->prepare("SELECT * FROM crop WHERE crop=?");
    $stmt->bind_param("s", $crop);
    $stmt->execute();
    $result_crop = $stmt->get_result(); // Renamed to avoid clash with main result
    $crop_data = $result_crop->fetch_assoc();
    $stmt->close();

    $isOrganic = true;

    $organic_fertilizers = [
        'Aries Trishool Neem Cake',
        'NatureCare Bio-organic Mix',
        'Local Vermicompost (Purva Farm)',
        'Pralshar Bio Fertilizer',
        'Organic Vermicompost (Local)',
        'Neem Cake / Organic Mix',
        'Vermicompost + Neem Cake Mix',
        'Organic Vegetable Mix Fertilizer',
        'Farmyard Manure (FYM)',
        'Organic Pressmud Compost'
    ];
    
    // Check for null or missing crop data before accessing array keys
    if ($crop_data) {
        // Check Fertilizer Name
        if (!in_array($fertilizer_name, $organic_fertilizers)) $isOrganic = false;
        // Check Fertilizer Value
        if ($fertilizer_value < $crop_data['fertilizer_min'] || $fertilizer_value > $crop_data['fertilizer_max']) $isOrganic = false;
        // Check Sensor Name
        if ($sensor_name != $crop_data['sensor_name']) $isOrganic = false;
        // Check Sensor Value
        if ($sensor_value < $crop_data['sensor_min'] || $sensor_value > $crop_data['sensor_max']) $isOrganic = false;
        // Check Water Value
        if ($water_value < $crop_data['water_min'] || $water_value > $crop_data['water_max']) $isOrganic = false;
    } else {
        // If crop data isn't found, it can't be certified organic in the system
        $isOrganic = false; 
    }

    $certificate = $isOrganic ? "Organic" : "Inorganic";

    // Insert into farmer table
    $stmt = $conn->prepare("INSERT INTO farmer (fname,lname,contact,location,certificate) VALUES (?,?,?,?,?)");
    $stmt->bind_param("sssss", $fname, $lname, $contact, $location, $certificate);
    $stmt->execute();
    $farmer_id = $stmt->insert_id;
    $stmt->close();

    // Insert into farm table
    $stmt = $conn->prepare("INSERT INTO farm (farmer_id,soil,crop,fertilizer_name,fertilizer_value,sensor_name,sensor_value,water_value) VALUES (?,?,?,?,?,?,?,?)");
    $stmt->bind_param("isssisii", $farmer_id, $soil, $crop, $fertilizer_name, $fertilizer_value, $sensor_name, $sensor_value, $water_value);
    $stmt->execute();
    $stmt->close();

    // Insert into market table
    $stmt = $conn->prepare("INSERT INTO market (location,crop,farmer_id,certificate) VALUES (?,?,?,?)");
    $stmt->bind_param("ssis", $location, $crop, $farmer_id, $certificate);
    $stmt->execute();
    $stmt->close();
}

// GET filters
$filter_cert = isset($_GET['certification']) ? $_GET['certification'] : '';
$filter_crop = isset($_GET['crop']) ? $_GET['crop'] : '';

// Fetch all farmers for display
$sql = "
SELECT m.market_id, fr.fname, fr.lname, fr.contact, fr.location, m.certificate,
       f.crop, f.soil, f.fertilizer_name, f.fertilizer_value,
       f.sensor_name, f.sensor_value, f.water_value
FROM market m
JOIN farmer fr ON m.farmer_id = fr.farmer_id
JOIN farm f ON fr.farmer_id = f.farmer_id
WHERE 1
";

// Apply filters
// Using mysqli_real_escape_string for basic security if not using prepared statements for GET
$safe_filter_cert = $conn->real_escape_string($filter_cert);
$safe_filter_crop = $conn->real_escape_string($filter_crop);

if($safe_filter_cert != '') $sql .= " AND m.certificate='$safe_filter_cert'";
if($safe_filter_crop != '') $sql .= " AND f.crop='$safe_filter_crop'";

$sql .= " ORDER BY m.market_id DESC";

$result = $conn->query($sql);

// Fetch crop list for filter dropdown
$crop_list = [];
$crop_res = $conn->query("SELECT DISTINCT crop FROM farm"); // Use DISTINCT crop from farm table
while($row = $crop_res->fetch_assoc()) $crop_list[] = $row['crop'];

?>

<form method="GET" class="filter-form">
    <label style="font-weight: 600; color: var(--color-primary-dark);">Certification:</label>
    <select name="certification">
        <option value="">All</option>
        <option value="Organic" <?= $filter_cert=="Organic"?"selected":"" ?>>Organic</option>
        <option value="Inorganic" <?= $filter_cert=="Inorganic"?"selected":"" ?>>Inorganic</option>
    </select>

    <label style="font-weight: 600; color: var(--color-primary-dark);">Crop:</label>
    <select name="crop">
        <option value="">All</option>
        <?php foreach($crop_list as $c): ?>
            <option value="<?= htmlspecialchars($c) ?>" <?= $filter_crop==$c?"selected":"" ?>><?= htmlspecialchars($c) ?></option>
        <?php endforeach; ?>
    </select>

    <button type="submit"><i class="fas fa-filter"></i> Filter</button>
</form>

<?php if($result->num_rows > 0): ?>
<table>
<tr>
<th>Market ID</th>
<th>Farmer Name</th>
<th>Contact</th>
<th>Location</th>
<th>Crop</th>
<th>Soil</th>
<th>Fertilizer</th>
<th>Fertilizer Value</th>
<th>Sensor</th>
<th>Sensor Value</th>
<th>Water Value</th>
<th>Certification</th>
</tr>
<?php while($row = $result->fetch_assoc()): 
    $row_class = ($row['certificate']=="Organic")?"green":"red"; ?>
<tr class="<?= $row_class ?>">
<td><?= htmlspecialchars($row['market_id']) ?></td>
<td><?= htmlspecialchars($row['fname'].' '.$row['lname']) ?></td>
<td><?= htmlspecialchars($row['contact']) ?></td>
<td><?= htmlspecialchars($row['location']) ?></td>
<td><?= htmlspecialchars($row['crop']) ?></td>
<td><?= htmlspecialchars($row['soil']) ?></td>
<td><?= htmlspecialchars($row['fertilizer_name']) ?></td>
<td><?= htmlspecialchars($row['fertilizer_value']) ?></td>
<td><?= htmlspecialchars($row['sensor_name']) ?></td>
<td><?= htmlspecialchars($row['sensor_value']) ?></td>
<td><?= htmlspecialchars($row['water_value']) ?></td>
<td><?= htmlspecialchars($row['certificate']) ?></td>
</tr>
<?php endwhile; 
?>
</table>
<?php else: 
    ?>
<p class="no-data">No farmers found for selected filters.</p>
<?php endif; 
?>
<br>
<h2>Organic Farmers Summary</h2>
<?php
$organic_sql = "
SELECT m.market_id, fr.fname, fr.lname, f.crop, fr.contact
FROM market m
JOIN farmer fr ON m.farmer_id = fr.farmer_id
JOIN farm f ON fr.farmer_id = f.farmer_id
WHERE m.certificate='Organic'
ORDER BY m.market_id DESC
";
$organic_result = $conn->query($organic_sql);
?>

<?php if($organic_result->num_rows > 0): ?>
<table>
<tr>
<th>Market ID</th>
<th>Farmer Name</th>
<th>Crop</th>
<th>Contact No</th>
</tr>
<?php while($row = $organic_result->fetch_assoc()): ?>
<tr>
<td><?= htmlspecialchars($row['market_id']) ?></td>
<td><?= htmlspecialchars($row['fname'].' '.$row['lname']) ?></td>
<td><?= htmlspecialchars($row['crop']) ?></td>
<td><?= htmlspecialchars($row['contact']) ?></td>
</tr>
<?php endwhile; ?>
</table>
<?php else: ?>
<p class="no-data">No organic farmers registered yet.</p>
<?php endif; 
$conn->close();
?>
<br>
 </div>

    <footer>
        <p>&copy; 2025 Sustainable Organic Farming System. All rights reserved.</p>
        <p style="font-size: 0.8rem;">Powered by Eco Cubed | <i class="fas fa-envelope"></i> contact@farmbuddy.com</p>
    </footer>

</body>
</html>