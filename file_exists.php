
n fileExists(string $path, string $file)
    {
        try
        {
            if (file_exists ($path . $file))
            {
                return true;
            }
            else
            {
                return false;
            }	
        }
        catch(Exception $e)
        {
        }
    }
?>

