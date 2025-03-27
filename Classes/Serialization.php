<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Serialization php</h1>
    <?php
    
    $data=[
        'name'=>'Raju Mane',
        'age'=>32,
        'phone'=>983339537
    ];

    $serializedData=serialize($data);
    echo "Serialized Data: $serializedData";
    echo "<br>";
    print_r($serializedData);

    echo "<br>";
    $unserializedData=unserialize($serializedData);
    print_r($unserializedData);
    ?>
</body>
</html>