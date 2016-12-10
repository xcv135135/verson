#include <iostream>  //Basic library

#include<string>
using namespace std;

class water{
public:
 water(int,const string &);
 void print1();
private:
 int a ;
 string watername;
};
water::water(int c,const string&name)
:a(c),
 watername(name){}

void water::print1()
{
cout<<a<<"."<<watername<<endl;
}
int b;
int main(){
void print2();
cout<<"d=石門水庫"<<endl;
cout<<"e=永和山水庫"<<endl;
cout<<"f=明德水庫"<<endl;
cout<<"g=鯉魚潭水庫"<<endl;
cout<<"h=德基水庫"<<endl; 
cout<<"i=霧社水庫"<<endl;
cout<<"j=仁義水庫"<<endl;
cout<<"k=蘭潭水庫"<<endl;
cout<<"l=曾文水庫"<<endl;
cout<<"m=南化水庫"<<endl;
cout<<"n=阿公店"<<endl;
cout<<"o=牡丹水庫"<<endl;
cout<<"p=成功水庫"<<endl;
cout<<"q=新山水庫"<<endl;
cout<<"r=翡翠水庫"<<endl;

water x1(1,"d");
water x2(2,"e");
water x3(3,"f");
water x4(4,"g");
water x5(5,"h");
water x6(6,"i");
water x7(7,"j");
water x8(8,"k");
water x9(9,"l");
water x10(10,"m");
water x11(11,"n");
water x12(12,"o");
water x13(13,"p");
water x14(14,"q");
water x15(15,"r");

x1.print1();
x2.print1();
x3.print1();
x4.print1();
x5.print1();
x6.print1();
x7.print1();
x8.print1();
x9.print1();
x10.print1();
x11.print1();
x12.print1();
x13.print1();
x14.print1();
x15.print1();
cout<<"請輸入水庫編號"<<endl;
cin>>b;
print2();

}

void print2()
{
if(b<=13)
cout<<"蓄水%數<40%->不足->發出警報";
if(b>13)
cout<<"蓄水%數>80%->充足->安全";
	
}