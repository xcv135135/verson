#include <iostream>  //Basic library
#include <cstdlib>  //system("pause")
using namespace std;

int main(){ 

int slection;

	cout << "請輸入你想觀看的新聞標題"<<endl;
        cout << "如果想看:"<<endl;
        cout << "陸客來台與夜市品質 請輸入1"<<endl;
        cout << "捷運安全:鄭傑殺人事件 請輸入2"<<endl;
        cout << "慶記 台中黑道新名詞 請輸入3"<<endl;
        cout << "演藝圈風風雨雨 請輸入4"<<endl;
        cout << "政治角力:台北大巨蛋 請輸入5"<<endl;
        cout << "媽媽嘴殺人事件 請輸入6"<<endl;
        cin >> slection;
while(slection>6 || slection<1)
{
   cout << "輸入錯誤請重新輸入";
   cin  >> slection;
}

	
	return 0;
}