<?php 

/**
' * ======791cf1cf62aa48f9d4530b2e3da5cc9e======================================================================
' * ��Ȩ���� (C) XueLiKai.Com������������Ȩ����
' * �ٷ���ַ: http://Www.dbcha.com ���뱣����Ȩ��Ϣ��
' * ------791cf1cf62aa48f9d4530b2e3da5cc9e----------------------------------------------------------------------
' * $Author: yujianyue <admin@ewuyi.net> $
' * $LastEdit: 2016-09-24 $
' * ------791cf1cf62aa48f9d4530b2e3da5cc9e----------------------------------------------------------------------
' * ���벻���ܣ�����Զ��ο����Ա���ʺ�������� �������ã������������������ۡ�
' * ������������ʱ�����ƣ��ǳ�ͨ�ã�����԰�װ��ݣ���λ�����빺�������
' * ======791cf1cf62aa48f9d4530b2e3da5cc9e:conn.php=============================================================
*/

error_reporting(0);
header("content-Type: text/html; charset=gb2312");//�������GBK

//���ú�����3-8��������˫���������ݣ�
$tiaojian1="��������";			//��ѯ����1�б��⣬��excel��ͷһ�£�ע���޿ո�س�;

$UpDir="data";			//�������ݿ�����Ŀ¼(�ļ�������)���޸ģ��޸ĺ������Ӧ�ļ��С�
$title="�������Ų�ѯϵͳ";			//���ò�ѯ����,�����㶮�ġ�
$copyr="С����";				//���õײ���Ȩ����,�����㶮�ġ�
$copyu="http://www.xiaodaishe.cn/";			//���õײ���Ȩ����,�����㶮�ġ�

$ismas="0";				//�����Ƿ�ʹ����֤�룬1��0��

//���ú�����3-8��������˫���������ݣ�


/*
//	��SAE�����ע���ַ��http://t.cn/R4QorPE ����ѿռ䣬��Ѷ����������ⱸ����
//	*************************
//	������ҳ:http://12391.net
//	��������:admin@ewuyi.net
//	��������:https://aiyaha.taobao.com/


���ǳ���ʵ�ã�������õķ�����

ͨ�óɼ���ѯϵͳ�������(��ͨ������):

����4:΢�Ź��ں�Nѡ1����ѯ����ֱ�Ӳ�ѯ���ʡ��ɼ���ˮ��ѵ�
������ͨ����:http://new.12391.net/ 
��Ƶ�̳�����:http://pan.baidu.com/s/1ge6BPEr 
���빺��:https://item.taobao.com/item.htm?id=520496908275 
�������:https://item.taobao.com/item.htm?id=529624346797 

����3(��):΢�Ź��ں�һ��һ�󶨲ſ��Բ�ѯ���ʡ��ɼ���ˮ��ѵ�
������ͨ����:http://add.96cha.com/ 
���빺��:https://item.taobao.com/item.htm?id=44248394675 
�������:https://item.taobao.com/item.htm?id=528187132312 

����2(��):�û����ߵ�¼��ѯ���ʳɼ�ˮ��ѵȣ��������޸�����
������ͨ����:http://add.dbcha.com/ 
��Ƶ�̳�����:http://pan.baidu.com/s/1boANMwv 
���빺��:https://item.taobao.com/item.htm?id=43193387085 
�������:https://item.taobao.com/item.htm?id=528108807297 

����1:ֱ��ͨ���趨�ģ�1-3������ѯ������ѯ
��Ѽ�ʱ��ͨ:http://add.12391.net/ 
��Ƶ�̳�����:http://pan.baidu.com/s/1eSoDn26 
���빺��:https://item.taobao.com/item.htm?id=528692002051 
�������:https://item.taobao.com/item.htm?id=520023732507 

����棺�����ܣ����������ƣ���ʱ������,һ�θ���һֱ����(��������վ�ռ������������)
��������������� ����ռ� ������� ���輼����Ա ���豸������������ ,��ʱ�丶��

ͨ��ģ������ϵͳ�������(��ͨ������):

����1:ͨ�ö�ѡһģ����ѯϵͳ��������
������ͨ����:http://add.xuelikai.com:1111/ 
��Ƶ�̳�����:http://pan.baidu.com/s/1ge6BPEr (ֻ�ο���һ���ڶ���)
���빺��:https://item.taobao.com/item.htm?id=520167788658 

����2:ͨ�ö�ѡһģ����ѯϵͳ������ѡ������
������ͨ����:http://add.xuelikai.com:2222/
��Ƶ�̳�����:http://pan.baidu.com/s/1ge6BPEr (ֻ�ο���һ���ڶ���)
���빺��:https://item.taobao.com/item.htm?id=520167788658 

����3(��):ͨ�ö�ѡһģ����ѯϵͳ��������
������ͨ����:http://add.xuelikai.com:3333/
��Ƶ�̳�����:http://pan.baidu.com/s/1ge6BPEr (ֻ�ο���һ���ڶ���)
���빺��:https://item.taobao.com/item.htm?id=520167788658 ��

��������ģ����������Ҳ�������ڶ�ѡһ��׼��ѯϵͳ

//	#####���������޸ĵ�����ע��鿴Ŷ######
*/


function webalert($Key){
 $html="<script>\r\n";
 $html.="alert('".$Key."');\r\n";
 $html.="history.go(-1);\r\n";
 $html.="</script>";
 exit($html);
}


//���Ѱ����ѡ��ʱ������
function traverse($dir_name = '.') {
$dir = opendir($dir_name); 
$basename = basename($dir_name); 
$fileArr = array(); 
while ($file_name = readdir($dir)) 
{ 
if (($file_name ==".") || ($file_name == "..")) { 
 } else if(is_dir($file_name)) {
 } else {
$filetp=substr($file_name,-4);
$filetp=strtolower($filetp);
$filesw=substr($file_name,0,-4);//ע���׺��4λ��
if($filetp == ".xls"){
$file = $filesw;    //
echo '<option value="'.trim($file).'">' . trim($file) . '</option>';
} 
 } 
} 
closedir($dir); 
} 


//*************************
//	#####���������޸ġ���Ӱ��ʹ�á�������ע��鿴Ŷ######
 // �ɼ�����ˮ���ͨ�ò�ѯϵͳ��������:

 // 50Ԫ:asp�����̨��(12��ѡ1):
 // https://item.taobao.com/item.htm?id=45703415332 

 // 60Ԫ:PHP�����̨��(36��ѡ1):
 // https://item.taobao.com/item.htm?id=45808268273 

 // 108Ԫ:PHP�༶������(8��ѡ1):
 // https://item.taobao.com/item.htm?id=43263796985 

 // Nѡ1ģ����ѯϵͳ�������(����8��68Ԫ��):
 // https://item.taobao.com/item.htm?id=520167788658 

 // Nѡ1��׼��ѯϵͳ�������(����8��68Ԫ��):
 // https://item.taobao.com/item.htm?id=520167788658

//*************************

?>
