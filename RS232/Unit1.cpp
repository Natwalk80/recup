//---------------------------------------------------------------------------

#pragma hdrstop

#include "Unit1.h"
//---------------------------------------------------------------------------
#pragma package(smart_init)

bool RS232::ouvrirport(char*port, DWORD BaudRate, BYTE bytesize, BYTE parity, BYTE StopBits)
{
	com = Createfile(port, GENERIC_READ | GENERIC_WRITE, 0, NULL, OPEN_EXISTING, FILE_FLAG_OVERLAPPED, NULL);
	if (com == INVALID_HANDLE_VALUE)
	{
        return false;
	}

	GetCommState(com, &config);
	config.BaudRate = baudRate;
	config.ByteSize = bytesize;
	config.Parity = parity;
	config.StopBits = StopBits;
	SetCommState(com, &config);

	return true;
}

bool RS232::fermerport()
{
	BOOL res = CloseHandle(com);
	return (res!=0);
}

bool RS232::lireport()
{
	char c;
	ReadFile(com, &E, 1, &over, NULL);
	if (GetOverlappedResult(com,&over,&result,FALSE==TRUE)
	{
        buffer.push_back(c);
	}
}
