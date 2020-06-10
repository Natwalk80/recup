//---------------------------------------------------------------------------

#include <vcl.h>
#pragma hdrstop

#include "DMX.h"
#include "Include/_DasHard.h"
//---------------------------------------------------------------------------
#pragma package(smart_init)
#pragma resource "*.dfm"
TForm1 *Form1;
//---------------------------------------------------------------------------
__fastcall TForm1::TForm1(TComponent* Owner)
	: TForm(Owner)
{
    g_dasusbdll = LoadLibrary(L"DasHard2006.dll");

	if (g_dasusbdll)
		DasUsbCommand = (DASHARDCOMMAND)::GetProcAddress((HMODULE)g_dasusbdll, "DasUsbCommand");

	interface_open =DasUsbCommand(DHC_INIT,0, NULL);
	Label1->Caption = interface_open;

    interface_open = DasUsbCommand(DHC_OPEN,0,0);
	Label2->Caption = interface_open;
    if (interface_open>0)
	{
		int i;

		for(i=0 ; i<DMX_MAXCHANNEL + 1; i++)
		{
			dmxBlock[i]=0;		}

		DasUsbCommand(DHC_DMXOUT, DMX_MAXCHANNEL, dmxBlock);
	}

    Timer1->Enabled = true;

}
//---------------------------------------------------------------------------
void __fastcall TForm1::Button1Click(TObject *Sender)
{
    interface_open=1;
}
//---------------------------------------------------------------------------
