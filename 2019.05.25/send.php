<?php

if(isset($_POST['submit'])){
$to = "info@epicblog.net";; // ����� ����� �������� e-mail, ���� ����� ��������� ������
$from = $_POST['email']; // this is the sender's Email address
$first_name = $_POST['first_name'];
$subject = "����� �������� ��������� � �����";
$subject2 = "Copy of your form submission";
$message = $first_name . " ������� ���������:" . "\n\n" . $_POST['message'];
$message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

$headers = "From:" . $from;
$headers2 = "From:" . $to;

mail($to,$subject,$message,$headers);
// mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender - ���������!
echo "��������� ����������. ������� ��� " . $first_name . ", �� ����� �������� � ����.";
echo "<br /><br /><a href='https://epicblog.net'>��������� �� ����.</a>";

}

?>

<!--������������� �� ������� �������� �����, ����� 3 �������-->
<script language="JavaScript" type="text/javascript">
function changeurl(){eval(self.location="https://epicblog.net/index.php");}
window.setTimeout("changeurl();",3000);
</script>
