#include <iostream>  //Basic library
using namespace std;

class House
{
public:
char a1 [7]={"節約","綠能","智慧","自動控制","人本","環保","節能減碳"};
char a2 [7]={"h1","h2","h3","h4","h5","h6","h7"};
int i;


};
int main(){ 

	House::a1;
	House::a2;

	cout << "請問您選擇房子時以什麼為優先考量呢?\n";
	cout << "1.節約,2.綠能,3.智慧,4.自動控制,5.人本,6.環保,7.節能減碳";
	cin >> i ;
	cout << "您選擇了" << a1[i] << "\n" ;
	cout << "我們為您挑選的房子為" << a2[i] << endl;

	return 0;
}