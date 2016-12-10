#include <iostream>  //Basic library
#include <cstdlib>  //system("pause")
#include <string>
using namespace std;
class judge
{
public:
	judge(char a)
	{
		if(a=='D'||a=='d')
		{
			cout << drink();
		}
		if(a=='F'||a=='f')
		{
			cout << food();
		}
		else
		{
			cout << "輸入錯誤!\n";
		}
	}
	string drink()
	{
		return "紅茶\n烏龍茶\n白毫烏龍茶\n珍珠奶茶\n泡沫紅茶\n青蛙下蛋\n冬瓜茶\n";
	}
	string food()
	{
		char b;
		cout << "你要有偏好哪個地區的食物嗎?(請輸入Y或N)\n";
		cin >> b;
		if(b=='y'||b=='Y')
		{
			return region();
		}
		if(b=='N'||b=='n')
		{
			return "肉粽(南部粽,北部粽)\n滷味\n滷肉飯\n肉燥飯\n鹹酥雞\n小籠包\n雞排\n碗糕\n碗糕\n潤餅\n蚵仔煎\n大腸麵線\n豬血糕\n牛肉麵\n台式涼麵\n豆花\n關東煮";
		}
		else
		{
			return "輸出錯誤!\n";
		}
	}
	string region()
	{
		int c;
		cout << "是下列哪一個地區的食物呢?\n" <<
			"萬巒(1),岡山(2),新竹(3),淡水(4),嘉義(5),彰化(6),台南(7),深坑(8)\n";
		cin  >> c;
		if(c==1)
		{
			return "豬腳\n";
		}
		if(c==2)
		{
			return "羊肉爐\n";
		}
		if(c==3)
		{
			return "米粉,\n貢丸\n";
		}
		if(c==4)
		{
			return "˙阿給\n";
		}
		if(c==5)
		{
			return "火雞肉飯\n";
		}	
		if(c==6)
		{
			return "肉圓\n";
		}
		if(c==7)
		{
			return "牛肉湯,\n虱目魚,\n棺材板,\n東山鴨頭,\n擔仔麵\n";
		}
		if(c==8)
		{
			return "臭豆腐\n";
		}
		else
		{
			return "輸入錯誤!\n";
		}
	}
private:
	char a;
};
int main(void){
	char inp;
	cout << "你要喝飲料(D)還是吃食物(F)呢?(請輸入D或F)\n";
	cin >> inp;
	judge littlefood1(inp);
	cout << "你要喝飲料(D)還是吃食物(F)呢?(請輸入D或F)\n";
	cin >> inp;
	judge littlefood2(inp);
	
	return 0;
}