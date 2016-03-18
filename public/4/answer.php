<?php

ini_set('error_reporting', E_ALL);


class dataToASCII
{

    protected $data;
    protected $maxLength;
    protected $separator = '';
    protected $columns = array();
    protected $headers = '';
    protected $colStartEnd = '+';

    function __construct($data)
    {
        $this->data = $data;
        $this->formatData();
        // print_r($this->data);
        $this->getColumnLongestStrCnt();
        $this->getSeparator();
        $this->drawTable();
    }

    function getColumnLongestStrCnt()
    {
        foreach ($this->data as $k => $column) {
            //get the max length of the largest string so we can ensure the columns are created wide enough to fit the data
            $maxLength = 0;
            foreach ($column as $key => $v) {
                $a = strlen($key);
                $b = strlen($v);
                if ($a > $maxLength) {
                    $maxLength = $a;
                } elseif ($b > $maxLength) {
                    $maxLength = $b;
                }
            }
        }
        $this->maxLength = $maxLength + 3;
    }

    function formatData()
    {
        //format the array and get headers
        $data = $this->data;
        foreach ($data as $k => $v) {
            ksort($v);
            $this->data[$k] = $v;
        }
        foreach ($data as $k => $v) {
            foreach ($v as $key => $value) {
                $this->columns['headers'][$key] = $key;
            }
        }
    }

    function getSeparator()
    {
//create seprators based on string length
        if ($this->separator == '') {
            $this->separator = '<br/>';
            foreach ($this->columns['headers'] as $data) {
                $this->separator .= $this->colStartEnd;
                for ($i = 0; $i <= $this->maxLength; $i++) {
                    $this->separator .= '-';
                }
            }
            $this->separator .= $this->colStartEnd;
        }
        //   echo $this->separator;
    }

    function drawremainderLength($remainingLength)
    {

        for ($i = 0; $i <= $remainingLength; $i++) {
            echo "&nbsp;";
        }
    }

    function drawTable()
    {
        //draws the table
        echo "</br></br>Resulting Table</br><pre>";
        echo $this->separator . '<br/>| ';
        foreach ($this->columns['headers'] as $k => $v) {
            $remainingLength = $this->maxLength - strlen("| $v");
            echo "$v ";
            //     echo "$header length is ".$data['length']." - ".strlen($header)." = $remainingLength ";
            for ($i = 0; $i <= $remainingLength; $i++) {
                echo "&nbsp;";
            }
            echo "| ";

        }
        echo $this->separator . '';
        foreach ($this->data as $array) {
            echo "<br/>| ";
            echo $array['Name'] . ' ';
            $remainingLength = $this->maxLength - strlen("| " . $array['Name']);
            $this->drawremainderLength($remainingLength);
            echo "| ";
            echo $array['Color'] . ' ';
            $remainingLength = $this->maxLength - strlen("| " . $array['Color']);
            $this->drawremainderLength($remainingLength);
            echo "| ";
            echo $array['Element'] . ' ';
            $remainingLength = $this->maxLength - strlen("| " . $array['Element']);
            $this->drawremainderLength($remainingLength);
            echo "| ";
            echo $array['Likes'] . ' ';
            $remainingLength = $this->maxLength - strlen("| " . $array['Likes']);
            $this->drawremainderLength($remainingLength);
            echo "| ";

        }
        echo $this->separator . '<br/>';
        echo "</pre></br></br></br>";

    }

}


$data = array(
    array(
        'Name' => 'Trixie',
        'Color' => 'Green',
        'Element' => 'Earth',
        'Likes' => 'Flowers',
    ),
    array(
        'Name' => 'Trixie',
        'Color' => 'Green',
        'Element' => 'Earth',
        'Likes' => 'Flowers',
    ),
    array(
        'Name' => 'Tinkerbell',
        'Element' => 'Air',
        'Likes' => 'Singing',
        'Color' => 'Blue',
    ),
    array(
        'Element' => 'Water',
        'Likes' => 'Dancing',
        'Name' => 'Blum',
        'Color' => 'Pink',
    ),
    array(
        'Color' => 'Neon Purple',
        'Name' => 'Constantinople',
        'Likes' => 'Web Development',
        'Element' => 'Nerd',
    ),
    array(
        'Name' => 'Trixie',
        'Color' => 'Green',
        'Element' => 'Earth',
        'Likes' => 'Flowers',
    ),
    array(
        'Name' => 'Trixie',
        'Color' => 'Green',
        'Element' => 'Earth',
        'Likes' => 'Flowers',
    ),
    array(
        'Name' => 'Tinkerbell',
        'Element' => 'Air',
        'Likes' => 'Singing',
        'Color' => 'Blue',
    ),
    array(
        'Element' => 'Water',
        'Likes' => 'Dancing',
        'Name' => 'Blum',
        'Color' => 'Pink',
    ),
    array(
        'Color' => 'Neon Purple',
        'Name' => 'Constantinople',
        'Likes' => 'Web Development',
        'Element' => 'Nerd',
    ),
    array(
        'Name' => 'Trixie',
        'Color' => 'Green',
        'Element' => 'Earth',
        'Likes' => 'Flowers',
    ),
    array(
        'Name' => 'Trixie',
        'Color' => 'Green',
        'Element' => 'Earth',
        'Likes' => 'Flowers',
    ),
    array(
        'Name' => 'Tinkerbell',
        'Element' => 'Air',
        'Likes' => 'Singing',
        'Color' => 'Blue',
    ),
    array(
        'Element' => 'Water',
        'Likes' => 'Dancing',
        'Name' => 'Blum',
        'Color' => 'Pink',
    ),
    array(
        'Color' => 'Neon Purple',
        'Name' => 'Constantinople',
        'Likes' => 'Web Development',
        'Element' => 'Nerd',
    ),
);

$table = new dataToASCII($data);
