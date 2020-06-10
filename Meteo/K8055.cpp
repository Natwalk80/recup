//---------------------------------------------------------------------------

#include <vcl.h>
#pragma hdrstop

#include "K8055.h"
#include "K8055D.h"
//---------------------------------------------------------------------------
#pragma package(smart_init)
#pragma resource "*.dfm"
TForm1 *Form1;
//---------------------------------------------------------------------------
__fastcall TForm1::TForm1(TComponent* Owner)
	: TForm(Owner)
{

}
//---------------------------------------------------------------------------

void __fastcall TForm1::Connexion(TObject *Sender)
{
	int Cardaddr = 0;
	OpenDevice(Cardaddr);
	Timer1->Enabled = true;
}
//---------------------------------------------------------------------------

void __fastcall TForm1::Deconnexion(TObject *Sender)
{
	CloseDevice();
	Form1->Close();
}
//---------------------------------------------------------------------------

void __fastcall TForm1::Timer1Timer(TObject *Sender)
{
	long Data1;
	long Data2;
	ReadAllAnalog(&Data1, &Data2);
	Label1->Caption = Data1;
	Label2->Caption = Data2;
}
//---------------------------------------------------------------------------

void __fastcall TForm1::OUT_1Click(TObject *Sender)
{
	SetDigitalChannel(1);
}
//---------------------------------------------------------------------------

void __fastcall TForm1::OUT_2Click(TObject *Sender)
{
	SetDigitalChannel(2);
}
//---------------------------------------------------------------------------

void __fastcall TForm1::OUT_3Click(TObject *Sender)
{
	SetDigitalChannel(3);
}
//---------------------------------------------------------------------------

void __fastcall TForm1::OUT_4Click(TObject *Sender)
{
	SetDigitalChannel(4);
}
//---------------------------------------------------------------------------

void __fastcall TForm1::OUT_5Click(TObject *Sender)
{
	SetDigitalChannel(5);
}
//---------------------------------------------------------------------------

void __fastcall TForm1::OUT_6Click(TObject *Sender)
{
	SetDigitalChannel(6);
}
//---------------------------------------------------------------------------

void __fastcall TForm1::OUT_7Click(TObject *Sender)
{
    SetDigitalChannel(7);
}
//---------------------------------------------------------------------------

void __fastcall TForm1::OUT_8Click(TObject *Sender)
{
    SetDigitalChannel(8);
}
//---------------------------------------------------------------------------

void __fastcall TForm1::ALLClick(TObject *Sender)
{
	for (int i = 0; i < 9; i++)
	{
		SetDigitalChannel(i);
	}
}
//---------------------------------------------------------------------------
void __fastcall TForm1::NulClick(TObject *Sender)
{
	for (int i = 0; i < 9; i++)
	{
		ClearDigitalChannel(i);
	}

}
//---------------------------------------------------------------------------

