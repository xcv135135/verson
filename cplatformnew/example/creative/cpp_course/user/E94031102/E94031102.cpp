#include <iostream>
#include<iomanip>
#include<string>
using namespace std;


int main()
{
int x;
 start:    
 cout<<"請輸入代號 1.春季2.夏季3.秋季4.冬季5.無明顯雨季"<<endl;
      cin>>x;
if(x=1){
cout<<"0"<<endl;
}
else if(x=2){
cout<<"1"<<endl;
}
else if(x=3){
cout<<"2"<<endl;
}
else if(x=4){
cout<<"3"<<endl;
}
else if(x=5){
cout<<"4"<<endl;
}
else{
cout<<"please try again";
goto start;
}
	cout << "class級別好困難,助教對不起";


	return 0;
}