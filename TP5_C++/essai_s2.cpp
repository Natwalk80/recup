//---------------------------------------------------------------------------

#pragma hdrstop

#include <windows.h>
#include <iostream.h>
#include "essai_s2.h"
#include "string2.cpp"
//---------------------------------------------------------------------------

using namespace std;

void main()
{
	int i;
	chaine2 ch1("essai"), ch2(ch1), ch3('=', 80);
	chaine2 ch4("cha�ne de caract�res constante");

	ch1[1]='E'; // le premier caract�re de la cha�ne
	cout << ch4[1] << "fin";
	ch1 = ch2 + ch3;

	for(int i=0; i<(ch2.longueur()+ch3.longueur());i++)
		cout << ch1[i];
		cout << "fin";


	ch2 += "de la Classe chaine2";
	ch2 +='g';

	if (ch2!="")
	{
		for (i=0; i<(ch2.longueur());i++)
			cout << ch2[i];
	}

	cout << "\n";

	ch3=ch2.minuscule();

	for (i=0; i<(ch3.longueur());i++)
		cout << ch3[i];
}