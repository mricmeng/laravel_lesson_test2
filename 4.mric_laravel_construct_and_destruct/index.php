<?php
class FileHandler
{
    private $fileHandle;
    private $filename;
    //1.The Constructor initialize the object
    public function __construct($filename)
    {
        $this->filename = $filename;
        echo "Constructor: Opening file '{$this->filename}";

        //Simulating Open a file
        $this->fileHandle = true;
    }

    //a standard method to do  work
    public function writeData($data){
        if($this->fileHandle){
            echo " Writing Data to file:". $data . " <br>";
            echo "Data: ". $data."<br>";
        }
    }
    //2.Destructor clean up when the object is done
    public function __destruct()
    {
        echo "Destructing the object and closing the file:" . $this->filename . $this->fileHandle = false;
    }
}

echo "---Start script---<br>";
$fileHandler = new FileHandler('Example.txt');
$fileHandler->writeData('Hellow World');
$fileHandler->writeData('Testing destructor in PHP');
?>