#include <iostream>  
using namespace std;
double A,B,C,D;

int main()
{ 
    cout<<"請輸入要轉換的溫度(1=華氏2=攝氏,3=克氏):"<<endl;
    cin>>A;
    cout<<"請輸入剛剛輸入的溫度單位(1=華氏,2=攝氏,3=克氏):"<<endl;
    cin>>B;
    cout<<"請輸入要轉換成的溫度單位(1=華氏,2=攝氏,3=克氏):"<<endl;
    cin>>C;
    cout<<""<<endl;

    if(B==1)
    {
    if(C==1)
    {
    D=A;
    cout<<D<<endl;
    }
    else if(C==2)
    {
    D=(A-32)*5/9; 
    cout<<D<<endl;
    }
    else if(C==3)
    {
    D=(A-32)*5/9+273.15;
    cout<<D<<endl;
    }
    else
    cout<<"error"<<endl;
    }
    else if(B==2)
{
    {
    if(C==2)
    {
    D=A;
    cout<<D<<endl;
    }
    else if(C==1)
    {
D=(A-32)*5/9;
cout<<D<<endl;
}
else if(C==3)
{
D=(A-32)*5/9;
cout<<D<<endl;
}
else
cout<<"error"<<endl;
}
else if(B==3)
{
{
if(C==3)
{
D=A;
cout<<D<<endl;
}
else if(C==2)
{
D=A-273.15;
cout<<D<<endl;
}
else if(C==1)
{
D=(A-273.15)*9/5+32
cout<<D<<endl;
}
else 
cout<<"error"<<endl;
}
else
cout<<"error"<<endl;


	return 0;
}
}