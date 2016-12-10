#include <iostream>  //Basic library
#include <cstdlib>  //system("pause")
using namespace std;
 
int main(){ 
char a,b,c,need1,need2;
cout<<"是否需要推薦國片??需要則按Y,不需要則按N"<<endl;
cin>>need1;
if (need1==Y)
cout<<"若想看賽德克巴萊按a,想看雞排英雄按b,想看海角七號按c"<<endl;
cin>>need2;
if (need2==a)
cout<<"賽德克巴來:預告網址"<<endl; //因網址過長又無法複製此處先省略
if (need2==b)
cout<<"雞排英雄:預告網址"<<endl;
if (need2==c)
cout<<"海角七號:預告網址"<<endl;
if (need1==N)
cout<<"謝謝光臨~"<<endl;

	
	return 0;
}