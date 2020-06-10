//---------------------------------------------------------------------------

#ifndef IHM_deH
#define IHM_deH
//---------------------------------------------------------------------------
#include <System.Classes.hpp>
#include <Vcl.Controls.hpp>
#include <Vcl.StdCtrls.hpp>
#include <Vcl.Forms.hpp>
#include <Vcl.Menus.hpp>
#include <Vcl.ExtCtrls.hpp>
#include "de.h"
//---------------------------------------------------------------------------
class TForm1 : public TForm
{
__published:	// Composants gérés par l'EDI
	TMainMenu *MainMenu1;
	TLabel *Label1;
	TTimer *Timer1;
	TButton *Button1;
	TMenuItem *Fichier1;
	TButton *Button2;
	TButton *Button3;
	TButton *Button4;
	TLabel *Label2;
	TMenuItem *choisir1;
	TMenuItem *de1;
	TMenuItem *dehisto1;
	void __fastcall Button1Click(TObject *Sender);
private:	// Déclarations utilisateur
public:		// Déclarations utilisateur
	__fastcall TForm1(TComponent* Owner);
};
//---------------------------------------------------------------------------
extern PACKAGE TForm1 *Form1;
//---------------------------------------------------------------------------
#endif
