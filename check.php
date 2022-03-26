<?php
$code=trim($_POST['name']); //removes spaces in starting and ending
echo "You have entered the string: ". $code ."<br>";
if($_POST['rad']=="A"){
    echo "you have selected encryption option<br>";
    $code=preg_replace('/[0-9\@\.\;\+\" \/"]/','',$code);

}
else{
    echo "\nYou have selected decryption option<br>";
    $code=preg_replace('/[\@\.\;\+\" \/"]/','',$code);
}
$code=strtoupper($code);
echo "corrected code:".$code."<br>";
$assoc_array=array("A"=>"11","B"=>"12","C"=>"13","D"=>"14","E"=>"15","F"=>"21","G"=>"22","H"=>"23","I"=>"24","J"=>"25","K"=>"31","L"=>"32","M"=>"33","N"=>"34","O"=>"35","P"=>"41","Q"=>"41","R"=>"42","S"=>"43","T"=>"44","U"=>"45","V"=>"45","W"=>"51","X"=>"52","Y"=>"53","Z"=>"54"," "=>"55",""=>"6");
if($_POST['rad']=="A"){
$code=str_split($code,1);
$choice=$_POST['rad'];
$core="";
for($i=0;$i<count($code);$i++)
{
    $core.=$assoc_array[$code[$i]];
}     
if(strlen($core)%3==1) //padding with 6 if it is not a multiple of 3
{
    $core.="66";
}     
else if(strlen($core)%3==2)
{
    $core.="6";
}
echo "<br>";
$core=str_split($core,3);
$anar=[];
for($i=0;$i<count($core);$i++){
    $temp=0;
    $temp=strval(intval($core[$i])*17); //Multiply by 17 for encryption
    array_push($anar,$temp);}
for($i=0;$i<count($anar);$i++)//interchange 1234 to 3142 
{
    [$anar[$i][0], $anar[$i][2]] = [$anar[$i][2], $anar[$i][0]];
    [$anar[$i][3], $anar[$i][1]] = [$anar[$i][1], $anar[$i][3]];
    [$anar[$i][2], $anar[$i][1]] = [$anar[$i][1], $anar[$i][2]];
}
echo "ENCRYPTED CODE &nbsp= ".str_repeat('&nbsp',6). implode($anar);}
else{
    if(is_numeric($code)==0){
        echo "<h1> PLEASE ENTER ONLY NUMBERS THAT ARE NEEDED TO BE DECRYPTED</h1>";
    }
    else{
        if(strlen($code)<4){
            echo "<h4> Pls enter data with lenght more than 4</h4>";
        }
        else{
        $core=str_split($code,4);
        for($i=0;$i<count($core);$i++)  //interchange 3142 to 1234 
    {
        [$core[$i][0], $core[$i][2]] = [$core[$i][2], $core[$i][0]];
        [$core[$i][3], $core[$i][1]] = [$core[$i][1], $core[$i][3]];
        [$core[$i][2], $core[$i][1]] = [$core[$i][1], $core[$i][2]];
        $core[$i]=strrev($core[$i]);
        $core[$i]=strval(intval($core[$i])/17); //divide by 17
    }
    $core=implode($core);
    $core=str_replace('6','',$core);
    $core=str_split($core,2);
    for($i=0;$i<5;$i++){
       $core[$i]=array_search($core[$i],$assoc_array);
    }
    echo "The decrypted code is" .str_repeat('&nbsp',6);
    print_r(implode($core));
    }
}}
     ?>
