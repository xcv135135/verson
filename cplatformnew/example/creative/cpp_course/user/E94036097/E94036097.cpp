#include <iostream>
#include <vector>
using namespace std;

class Data
{
friend void function0(vector<Data> &);
friend void function1(vector<Data> &);
friend void function2(vector<Data> &);
friend void function3(vector<Data> &);

public:
	Data(double a, double p, int r, int u)
	{
	  setData(a,p,r,u);
	}
	void setData(double all, double pre, int ra, int us)
	{
	  save = all * pre;
	  rain = ra;
	  use = us;
	  forall = all * pre + ra - us;
	}
private:
	double save;
        int rain;
        int use;
	double forall;
};

void function0(vector<Data> &vec)
{
function1(vec);
function2(vec);
function3(vec);
int size = vec.size();
int check = 0;
cout << vec[0].forall << endl;
for(int i=1; i<size; i++)
{
  cout << vec[i].forall << endl;
  if (vec[i].forall < vec[check].forall)
     check = i;
}
cout << "The most need water region is " << check << endl;
}

void function1(vector<Data> &vec)
{
int size = vec.size();
int check = 0;
cout << vec[0].save << endl;
for(int i=1; i<size; i++)
{
  cout << vec[i].save << endl;
  if (vec[i].save > vec[check].save)
     check = i;
}
cout << "The best of save is region " << check << endl;
}

void function2(vector<Data> &vec)
{
int size = vec.size();
int check = 0;
cout << vec[0].rain << endl;
for(int i=1; i<size; i++)
{
  cout << vec[i].rain << endl;
  if (vec[i].rain > vec[check].rain)
     check = i;
}
cout << "The most rain is region " << check << endl;
}

void function3(vector<Data> &vec)
{
int size = vec.size();
int check = 0;
cout << vec[0].use << endl;
for(int i=1; i<size; i++)
{
  cout << vec[i].use << endl;
  if (vec[i].use > vec[check].use)
     check = i;
}
cout << "The most use is region " << check << endl;
}

int main()
{
vector<Data> water;
Data north(29004.69,0.864,8000,10000); //北部 翡翠
Data mid(9388.31,0.715,6000,5000); //中部 日月潭
Data south(7126.00,0.15,10000,7000); //南部 曾文
water.push_back(north);
water.push_back(mid);
water.push_back(south);

int t;
cout << "Enter 0 to get all"
     << "\nEnter 1 to get save"
     << "\nEnter 2 to get rain"
     << "\nEnter 3 to get use" << endl;
cin >> t;
cout << "region 0 is north"
     << "\nregion 1 is mid"
     << "\nregion 2 is south" << endl;
cout << "The number show in this sequence." << endl;
if(t==0)
  function0(water);
else if(t==1)
  function1(water);
else if(t==2)
  function2(water);
else if(t==3)
  function3(water);
else
  cout << "wrong input" << endl;

;
return 0;
}