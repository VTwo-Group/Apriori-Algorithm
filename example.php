<!DOCTYPE HTML>
<html>
<head> 
    <meta http-equiv="content-type" content="text/html; charset=utf-8" /> 
	<title>Apriori Alghoritm</title>
</head>
<body style="font-family: monospace;">
<?php   
include 'class.apriori.php';

$Apriori = new Apriori();

$Apriori->setMaxScan(20);       //Scan 2, 3, ...
$Apriori->setMinSup(2);         //Minimum support 1, 2, 3, ...
$Apriori->setMinConf(75);       //Minimum confidence - Percent 1, 2, ..., 100
$Apriori->setDelimiter(',');    //Delimiter 

/*
Use Array:
$dataset   = array();
$dataset[] = array('A', 'B', 'C', 'D'); 
$dataset[] = array('A', 'D', 'C');  
$dataset[] = array('B', 'C'); 
$dataset[] = array('A', 'E', 'C'); 
$Apriori->process($dataset);
*/
$Apriori->process('dataset.txt');

//Frequent Itemsets
echo '<h1>Frequent Itemsets</h1>';
$Apriori->printFreqItemsets();

echo '<h3>Frequent Itemsets Array</h3>';
print_r($Apriori->getFreqItemsets()); 

//Association Rules
echo '<h1>Association Rules</h1>';
$Apriori->printAssociationRules();

echo '<h3>Association Rules Array</h3>';
print_r($Apriori->getAssociationRules()); 

//Save to file
$Apriori->saveFreqItemsets('freqItemsets.txt');
$Apriori->saveAssociationRules('associationRules.txt');
?>  
</body>
</html>
