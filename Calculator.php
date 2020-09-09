<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
	<style>
		.boxed{
			margin-left: 35%;
			margin-right: 35%;
			background-color: white;
			border-style: solid;
  			border-width: 3px;
		}
	</style>
</head>
<body style="background-color: lightblue;" >
	<h1 align="center">Calculator</h1>
	

<?php 
$result = "";
class calculator
{
    var $a;
    var $b;

    function checkoperation($operator)
    {
        switch($operator)
        {
            case '+':
            return $this->a + $this->b;
            break;

            case '-':
            return $this->a - $this->b;
            break;

            case '*':
            return $this->a * $this->b;
            break;

            case '/':
            return $this->a / $this->b;
            break;

            default:
            return "Sorry No command found";
        }   
    }
    function getresult($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        return $this->checkoperation($c);
    }
}

$cal = new calculator();
if(isset($_POST['submit']))
{   
    $result = $cal->getresult($_POST['n1'],$_POST['n2'],$_POST['op']);
}
?>
<div class="boxed">
<form method="post">
<table align="center">
    
    <tr>
        <td>Enter 1st Number</td> <br>
        <td><input type="text" name="n1"> </td>
    </tr>

    <tr>
        <td>Enter 2nd Number</td> 
        <td><input type="text" name="n2"></td>
    </tr>

    <tr>
        <td>Select Operator</td>
        <td><select name="op">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select></td>
    </tr>
    <tr>
        <td>Result</td>
        <td><input type="submit" name="submit" value="="><strong>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $result; ?><strong></td>
    </tr>


</table>
</form>
</div>

</body>
</html>