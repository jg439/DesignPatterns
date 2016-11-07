<?php
include_once('KeySingleton.php');
 include_once('KeyBorrower.php');


 writeln('Design Patterns: Singleton Test');
 writeln('');


 $keyBorrower1 = new KeyBorrower();
 $keyBorrower2 = new KeyBorrower();


 $keyBorrower1->borrowKey();
 writeln('Someone just asked to borrow some keys');
 writeln('KeyBorrower1 Name and Owner: ');
 writeln($keyBorrower1->getNameAndOwner());
 writeln('');


 $keyBorrower2->borrowKey();
 writeln('Someone has just gone to borrow the same keys');
 writeln('keyBorrower2 Name and Owner: ');
 writeln($keyBorrower2->getNameAndOwner());
 writeln('');


 $keyBorrower1->returnKey();
 writeln('KeyBorrower1 returned the key');
 writeln('');


 $keyBorrower2->borrowKey();
 writeln('KeyBorrower2 Name and Owner: ');
 writeln($keyBorrower1->getNameAndOwner());
 writeln('');


 writeln('End of the program');


 function writeln($line_in) {
   echo $line_in.'<'.'BR'.'>';
 }


?>
