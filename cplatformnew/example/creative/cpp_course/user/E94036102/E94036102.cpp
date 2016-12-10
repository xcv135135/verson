#include <iostream>  //Basic library
using namespace std;



class Climate
{  public:
      double Temperature;
      double Rainfall;
      Speciesofclimate(double ,double );
}

   Climate::Speciesofclimate(double temp,double rain)
{   if( temp >= 20 && rian >= 500)
    { 
       cout<<"這是熱帶濕潤性氣候";
    }
    else
    if( temp >= 20 && rain < 500) 
    {
       cout<<"這是熱帶乾燥性氣候";
    } 
    else
    if( temp <20 && rain >= 500)
    {
       cout<<"這是溫帶濕潤性氣候";
    }
    else
    if( temp < 20 && rain < 500)
    {
       cout<<"這是溫帶乾燥性氣候";
    }
   double Climate::Temperature
   {
      return tenp;
   }
   double Climate::Rainfall
   {
      return rain;
   }
   int main()
   {
     cout<<"請輸入溫度";
     cin>>temperature;
     cout<<"請輸入雨量";
     cin>>rainfall;
     Speciesofclimate(double temperature,double rainfall);
     return0
   }