Apriori Algorithm
===============

Implementation of the Apriori algorithm in PHP. [Main Page](http://vtwo.org/algorithm/apriori/)

## Usage
First step:
```php
include 'class.apriori.php'; 
$Apriori = new Apriori();
```
## Methods
setMaxScan(int), setMinSup(int), setMinConf(int), setDelimiter(string), getMinSup(void), getMinConf(void), getMaxScan(void), getDelimiter(void), process(string or array), printFreqItemsets(void), getFreqItemsets(void), printAssociationRules(void), getAssociationRules(void), saveFreqItemsets(string), saveAssociationRules(string)

## Initialize
Initialize options:
```php
$Apriori->setMaxScan(20);       //Scan 2, 3, ...
$Apriori->setMinSup(2);         //Minimum support 1, 2, 3, ...
$Apriori->setMinConf(75);       //Minimum confidence - Percent 1, 2, ..., 100
$Apriori->setDelimiter(',');    //Delimiter
```
## dataset.txt
```txt
A, B, C, D 
A, D, C
B, C
A, E, C
```
## Example
minSup = 2, minConf = 75(%)
### Coding
```php
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
```
### Result
#### Frequent Itemsets
```txt
Time: 0 second(s)
===============================================================================
{B,C} = 2
{A,C,D} = 2
```
#### Frequent Itemsets Array
```txt
Array
(
    [0] => Array
        (
            [sup] => 2
            [0] => B
            [1] => C
        )

    [1] => Array
        (
            [sup] => 2
            [0] => A
            [1] => C
            [2] => D
        )

)
```
#### Association Rules
```txt
Time: 0 second(s)
===============================================================================
B => C = 100%
D => C = 100%
D => A = 100%
D => A,C = 100%
C => A = 75%
A => C = 100%
A,D => C = 100%
C,D => A = 100%
```
#### Association Rules Array
```txt
Array
(
    [B] => Array
        (
            [C] => 100
        )

    [D] => Array
        (
            [C] => 100
            [A] => 100
            [A,C] => 100
        )

    [C] => Array
        (
            [A] => 75
        )

    [A] => Array
        (
            [C] => 100
        )

    [A,D] => Array
        (
            [C] => 100
        )

    [C,D] => Array
        (
            [A] => 100
        )

)
```
