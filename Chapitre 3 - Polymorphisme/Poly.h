//---------------------------------------------------------------------------

#ifndef PolyH
#define PolyH
//---------------------------------------------------------------------------
#include <System.Classes.hpp>
#include <Vcl.Controls.hpp>
#include <Vcl.StdCtrls.hpp>
#include <Vcl.Forms.hpp>
#include <Vcl.Menus.hpp>
//---------------------------------------------------------------------------
class TForm1 : public TForm
{
__published:	// Composants gérés par l'EDI
	TMainMenu *MainMenu1;
	TMenuItem *Fichier1;
	TMenuItem *Ajouter1;
	TMenuItem *Affichage1;
	TMenuItem *Quitter1;
	TMenuItem *Affichage2;
	TButton *Button1;
	TEdit *Edit1;
	TLabel *Label1;
	TEdit *Edit2;
	TLabel *Label2;
	TEdit *Edit3;
	TLabel *Label3;
	TEdit *Edit4;
	TLabel *Label4;
	TEdit *Edit5;
	TLabel *Label5;
	TEdit *Edit6;
	TLabel *Label6;
	TLabel *Label7;
	TCheckBox *CheckBox1;
	TCheckBox *CheckBox2;
	void __fastcall Ajouter1Click(TObject *Sender);
private:	// Déclarations utilisateur
public:		// Déclarations utilisateur
	__fastcall TForm1(TComponent* Owner);
};
//---------------------------------------------------------------------------
extern PACKAGE TForm1 *Form1;
//---------------------------------------------------------------------------
#endif
