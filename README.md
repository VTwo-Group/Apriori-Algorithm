Apriori Algorithm
===============

Implementation of the Apriori algorithm in PHP.

## Usage
First step:
```php
include 'class.apriori.php'; 
$Apriori = new Apriori();
```
## Methods
setMaxScan(int), setMinSup(int), setMinConf(int), setDelimiter(string), getMinSup(void), getMinConf(void), getMaxScan(void), getDelimiter(void), process(string or array), printFreqItemsets(void), getFreqItemsets(void), printAssociationRules(void), getAssociationRules(void), saveFreqItemsets(string), saveAssociationRules(string)

##Initialize
Can optionally override some or all of the following defaults:
```php
$Apriori->setMaxScan(20);       //Scan 2, 3, ...
$Apriori->setMinSup(2);         //Minimum support 1, 2, 3, ...
$Apriori->setMinConf(75);       //Minimum confidence - Percent 1, 2, ..., 100
$Apriori->setDelimiter(',');    //Delimiter
```
## Example
[Visit](http://vtwo.org/algorithm/apriori/)
