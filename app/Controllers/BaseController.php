<?php
namespace App\Controllers;

class BaseController
{    
    /**
     * Read json file and convert into an array
     *
     * @return array
     */
    protected function getJsonData(): array
    {
        $jsonData = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/response.json");

        return json_decode($jsonData, true);
    }
    
    /**
     * Get client data
     *
     * @return array
     */
    protected function getClientInfo(): array
    {
        $getJsonData = $this->getJsonData();

        return $getJsonData['Report'][0];
    }
    
    /**
     * Get threatened info
     *
     * @return array
     */
    protected function getThreatenedInfo(): array
    {
        $getJsonData = $this->getJsonData();

        return $getJsonData['Threatend'][0];
    }
    
    /**
     * Segregate the threat
     *
     * @return array
     */
    protected function getSegregatedThreat(): array
    {
        $threatenedData = $this->getThreatenedInfo();
        $threat = [];
        
        foreach ($threatenedData as $key => $threatened) {
            if (substr($key, 0, 6) == "threat") {
                $expArray = explode('_', $key);
                $breakFirstStr = str_split($expArray[0], 6);
                if (count($expArray) > 1) {
                    $threat[$breakFirstStr[1]][$expArray[1]] = $threatened;
                    if ($expArray[1] === "attackcomplexity") {
                        $threat[$breakFirstStr[1]]["attackcomplexity_class"] = $this->setTextClass(trim($threatened));
                    }
                    if ($expArray[1] === "confidentialityimpact") {
                        $threat[$breakFirstStr[1]]["confidentialityimpact_class"] = $this->setTextClass(trim($threatened));
                    }
                } else {
                    $threat[$breakFirstStr[1]]['title'] = $threatened;
                }
            }
        }

        return $threat;
    }
    
    /**
     * Set text class
     *
     * @param  mixed $component
     * @return string
     */
    protected function setTextClass(string $component): string
    {
        $class = 'text-danger';
        switch ($component) {
            case "Low":
                $class = "text-success";
                break;
            case "Medium":
                $class = "text-primary";
                break;
            case "High":
                $class = "text-warning";
                break;
        }
        return $class;
    }
}