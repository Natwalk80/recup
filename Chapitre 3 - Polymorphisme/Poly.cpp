//---------------------------------------------------------------------------

#include <vcl.h>
#pragma hdrstop

#include "Poly.h"
//---------------------------------------------------------------------------
#pragma package(smart_init)
#pragma resource "*.dfm"
TForm1 *Form1;
//---------------------------------------------------------------------------
__fastcall TForm1::TForm1(TComponent* Owner)
	: TForm(Owner)
{
	Button1->Visible=false;
	CheckBox1->Visible=false;
	CheckBox2->Visible=false;
	Edit1->Visible=false;
	Edit2->Visible=false;
	Edit3->Visible=false;
	Edit4->Visible=false;
	Edit5->Visible=false;
	Edit6->Visible=false;
	Label1->Visible=false;
	Label2->Visible=false;
	Label3->Visible=false;
	Label4->Visible=false;
	Label5->Visible=false;
	Label6->Visible=false;
	Label7->Visible=false;
}
//---------------------------------------------------------------------------

void __fastcall TForm1::Ajouter1Click(TObject *Sender)
{
	Button1->Visible=true;
	CheckBox1->Visible=true;
	CheckBox2->Visible=true;
	Edit1->Visible=true;
	Edit2->Visible=true;
	Edit3->Visible=true;
	Edit4->Visible=true;
	Edit5->Visible=true;
	Edit6->Visible=true;
	Label1->Visible=true;
	Label2->Visible=true;
	Label3->Visible=true;
	Label4->Visible=true;
	Label5->Visible=true;
	Label6->Visible=true;
	Label7->Visible=true;
}
//---------------------------------------------------------------------------

