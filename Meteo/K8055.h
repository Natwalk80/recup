//---------------------------------------------------------------------------

#ifndef K8055H
#define K8055H
//---------------------------------------------------------------------------
#include <System.Classes.hpp>
#include <Vcl.Controls.hpp>
#include <Vcl.StdCtrls.hpp>
#include <Vcl.Forms.hpp>
#include <Vcl.ComCtrls.hpp>
#include <Vcl.Buttons.hpp>
#include <Vcl.ExtCtrls.hpp>
#include <System.Bluetooth.Components.hpp>
#include <System.Bluetooth.hpp>
//---------------------------------------------------------------------------
class TForm1 : public TForm
{
__published:	// Composants gérés par l'EDI
	TButton *Button1;
	TButton *Button2;
	TTimer *Timer1;
	TLabel *Label1;
	TLabel *Label2;
	TButton *OUT_1;
	TButton *OUT_2;
	TButton *OUT_3;
	TButton *OUT_4;
	TButton *OUT_5;
	TButton *OUT_6;
	TButton *OUT_7;
	TButton *OUT_8;
	TButton *ALL;
	TButton *Nul;
	void __fastcall Connexion(TObject *Sender);
	void __fastcall Deconnexion(TObject *Sender);
	void __fastcall Timer1Timer(TObject *Sender);
	void __fastcall OUT_1Click(TObject *Sender);
	void __fastcall OUT_2Click(TObject *Sender);
	void __fastcall OUT_3Click(TObject *Sender);
	void __fastcall OUT_4Click(TObject *Sender);
	void __fastcall OUT_5Click(TObject *Sender);
	void __fastcall OUT_6Click(TObject *Sender);
	void __fastcall OUT_7Click(TObject *Sender);
	void __fastcall OUT_8Click(TObject *Sender);
	void __fastcall ALLClick(TObject *Sender);
	void __fastcall NulClick(TObject *Sender);
private:	// Déclarations utilisateur
public:		// Déclarations utilisateur
	__fastcall TForm1(TComponent* Owner);
};
//---------------------------------------------------------------------------
extern PACKAGE TForm1 *Form1;
//---------------------------------------------------------------------------
#endif
