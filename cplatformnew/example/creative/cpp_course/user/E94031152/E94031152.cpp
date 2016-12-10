#include <iostream>  //Basic library
using namespace std;

float calorie( float a, float b, float c )
{
	return 4*a + 4*b + 9*c;
}

int main(){
	float a;
	float b;
	float c;
	float x;

	x = calorie( a, b, c );

	cout << "請輸入您今日所攝取的醣類克數：";
	cin >> a;
	cout << "\n請輸入您今日所攝取的蛋白質克數：";
	cin >> b;
	cout << "\n請輸入您今日所攝取的脂肪克數：";
	cin >> c;

	cout << "計算出來之後，您今日的攝取熱量為："
	     << calorie( a, b, c );

	if( x >= 2000 )
		cout << "您已達今日建議攝取熱量";
	else
		cout << "您未達今日建議攝取熱量";

	;
	return 0;
}