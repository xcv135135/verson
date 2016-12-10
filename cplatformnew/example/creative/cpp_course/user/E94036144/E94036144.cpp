#include <iostream> 
#include <iomanip>
#include <algorithm>
using namespace std;

class rainfall
{
public:
rainfall(int =79 ,int =39 ,int =34 ,int =35.5 ,int =38.5 );
void getwater();
void getrain();
double a,b,c,d,e,f;
};

void rainfall::getwater()
{}
void rainfall::getrain()
{}

int a=79,b=39,c=34,d=35.5,e=38.5;
int main()
{ 
cout<<"a=合歡山莊=79mm  "<<"  b=奮起湖=39mm"<<"  c=峨眉=34mm";
cout<<"d=龍潭=35.5mm  "<<"  e=阿里山=38.5mm";
cout<<a<<b<<c<<d<<e;
int rainfall[]={79,39,34,35.5,38.5};
sort(rainfall,rainfall+5);
for(int j=0,j<5,j++);
{
cout<<rainfall[j]<<endl;
}

	return 0;
}