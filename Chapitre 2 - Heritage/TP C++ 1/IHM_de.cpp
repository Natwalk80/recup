//---------------------------------------------------------------------------

#include <vcl.h>
#include <iostream>
#include <random>
#include <time.h>
#include <stdlib.h>
#include <cstdlib>
#include <ctime>
#pragma hdrstop

#include "IHM_de.h"
//---------------------------------------------------------------------------
#pragma package(smart_init)
#pragma resource "*.dfm"
TForm1 *Form1;
//---------------------------------------------------------------------------
using namespace std;

__fastcall TForm1::TForm1(TComponent* Owner)
	: TForm(Owner)
{
	srand((unsigned)time(0));
	int i;
	i = (rand()%6)+1;
	cout << i << "\n";
	Label1->Caption = i;
}
//---------------------------------------------------------------------------


void __fastcall TForm1::Button1Click(TObject *Sender)
{
    	srand((unsigned)time(0));
	int i;
	i = (rand()%6)+1;
	cout << i << "\n";
	Label1->Caption = i;
}
//---------------------------------------------------------------------------
