<?php

class CountryInformation
{
    const API_URL = 'http://restcountries.eu/rest/v1/name/';

    protected $countryName;

    protected $capital;

    protected $region;

    protected $population;

    protected $languages;

    public function __construct($countryName)
    {
        $this->countryName = $countryName;

        $rawData = $this->getEndData();
        $dArray = $this->convertJason($rawData);
        $this->popprop($dArray);

    }

    public function getEndData()
    {
        return file_get_contents(self::API_URL . $this->countryName);
    }

    public function convertJason($jsonData)
    {
        $jsonArray = json_decode($jsonData, JSON_OBJECT_AS_ARRAY);

        if (sizeof($jsonArray) == 1 && !empty($jsonArray)) {
            return array_pop($jsonArray);
        } else {
            return null;
        }
    }

    public function popprop($dArray)
    {
        if (empty($dArray)) {
            throw new Exception('No data found for country' . $this->countryName);
        }

        $this->capital = $dArray['capital'];
        $this->region = $dArray['region'];
        $this->population = $dArray['population'];
        $this->languages = $dArray['languages'];
    }

    public function getCountryName()
    {
        return $this->countryName;
    }

    public function getPopulation()
    {
        return number_format($this->population);
    }

    public function getRegion()
    {
        return $this->region;
    }

    public function getLanguages()
    {
        return implode(', ', $this->languages);
    }


}

?>

<pre>
    //Create a form that accepts a country name, and feed that into the object we just
    //Creted and display the country information

    Your output should look like this

    ---------------------------
    Capital: Moscow
    Region: EU
    Population: 1234
    Languages: en, ru
    ---------------------------
    <form name ="countryForm" action="<?php echo($_SERVER['PHP_SELF']);?>" method="post">
        Enter Country: <input type="text" name="countryName" size="30"/>
        <input type="submit"/>
    </form>


<hr/>
    <?php

    if ($_POST)
    {
        try{
            $countryName = $_POST['countryName'];
            $info  = new CountryInformation($countryName);
            print_r($info);

            echo 'Capital: ' . $info->getCapital() . '<br/>';
            echo 'Region: ' . $info->getRegion() . '<br/>';
            echo 'Population: ' . $info->getPopulation() . '<br/>';
            echo 'Languages: ' . $info->getLanguages() . '<br/>';

        } catch (UserException $exception) {
            echo '<p style="color:red;">' . $exception->getMessage() . '</p>';
        }
    }
    ?>

</pre>