#include <iostream>  //Basic library
#include <cstdlib>  //system("pause")
#include <string>
using namespace std;

int main(){ 

 string N[3]={"士林夜市","饒河夜市","寧夏夜市"};
 string M[3]={"一中街","逢甲夜市","水湳"};
 string S[2]={"大大武花大武花","瑞豐夜市"};
 string W[8]=N+M+S;

	cout << "WELLCOME TO TAIWAN";
        cout << W[8];

	
	return 0;
}