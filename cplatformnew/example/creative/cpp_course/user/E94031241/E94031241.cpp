#include <iostream>  //Basic library
#include <cstdlib>  //system("pause")
#include <string>

using namespace std;
string person[]={"柯文哲", "炎亞綸", "汪東城", "小當家"};;
string events[]={"沒教養", "下雨地震", "炎亞綸", "所以我說，醬汁呢？"};
string name;

int main(){ 

cout <<"請輸入最近有名人物的名字，你就會得到最新的資訊："<<endl;
cin >> name;

do{
int n=0;
n<4;
n++;
}
while(name!=person[n]);

if (name=person[n])
cout<< name <<"現在最有名的事件是:"<< events[n] << endl;

else

cout<<"你輸入的名字不在資料庫中，請重新輸入："<< endl;

cin >> name ;
	
	return 0;
}