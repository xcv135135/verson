#include <iostream> 
#include <cstdlib>  
#include <iomanip>
#include <string>
using namespace std;

class find_food
{
    public :
    find_food()
    {
        ;
    }
    void front()
    {
    	for ( i = 0; i < 5; i++ )
    	{
    		cout<<setw(5)<<list[ i ];
		}
    }

    void rear()
    {
    	for ( i = 5; i < 9; i++ )
    	{
    		cout<<setw(5)<<list[ i ];
		}
    }
     
    private :
        int i;
        string list[9] = { "花梅蘭壽司", "六千", "阿裕", "炸雞洋行", "炸雞本舖", "惡魔炸雞", "蘇記", "品度炭烤", "卑南胡同" };
};

int main()
{
    find_food food;
    int answer;

    cout<<"Do you want to know the food in Tainan? 1: yes  0: no"<<endl;
    cin>>answer;
    if ( answer == 0)
        return 0;
    else
        {
            cout<<"keyin \'1\' for front train station\nkeyin \'0\' for rear train station\nkeyin another word to exit"<<endl;
            cin>>answer;
            if ( answer == 1)
                food.front();
            else if ( answer == 0)
                food.rear();
            else
                return 0;
            
            
            return 0;
        
        }
}
          