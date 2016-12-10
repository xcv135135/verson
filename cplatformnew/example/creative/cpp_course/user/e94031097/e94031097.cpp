#include <iostream>  //Basic library
using namespace std;

class rain
{
public:
  rain();
  void setrain(int);
  void printrain();
private:
  int a;
};

rain::rain()
{
 a=0;
}

void rain::setrain( int a )
{
 cout<<"請輸入雨量:"<<endl;
 cin>>a;
}

void rain::printrain()
{
 cout<<"雨量分級為";
 if( a<=130)
  cout<<"大雨";
 else if( a>130 && a<=200 )
  cout<<"豪雨";
 else if( a>200 && a<=350 )
  cout<<"大豪雨";
 else if( a>350 )
  cout<<"超大豪雨";
}

int main()
{ 
rain r;
r.setrain(a);
r.printrain();

return 0;
}