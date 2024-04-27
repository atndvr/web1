<form action="" method="post">
    <input type="text" name="message">
    <input type="submit" name="submit">
</form>
<?php
    if(isset($_POST['submit']))
    {
        $apiToken = "6936378040:AAGAdvzQYo6502inGljvgYKSa04-VDQPvTk";
        $data = [
            'chat_id' => '@PSBuyers', 
            'text' => $_POST['message']
        ];
        $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );    
    }
?>