#include <iostream>  //Basic library
using namespace std;

int main(){ 
int a ,b,c,d;
cout<< "分別輸入本周平均雨量、上周平均雨量、土地初始高度" << endl;
cin >> a ,b, c;
for(int i=0;i<=200;i++){
c+=i;
d=(a-b)/c;
cout << d ;
}
cout << "一周以來土壤200高度差的含水量為:"<< d ;



	return 0;
}