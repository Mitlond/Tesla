function recrut (a,b,c){
if (a == 0) return (-�/b); //���������  ������ �� ������������ ������ �� �� ������� �� �����) ��������� � �������� ������ ������ 
var D=(b*b)+(4*(a*c));
if (D<0)   return "���� ������";
if (D=0)   return "x1="-b/(2*a);
if (D>1)   
{
var x1=(-b+Math.sqrt(D))/(2*a);
var x2=(-b-Math.sqrt(D))/(2*a);
return "x1="+x1+"|x2="+x2;
}
}
var t = recrut(3,5,-1);
var v = recrut(4,6,-3);
console.log(t,v);