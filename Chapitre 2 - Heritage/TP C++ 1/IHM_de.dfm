object Form1: TForm1
  Left = 0
  Top = 0
  Caption = 'Form1'
  ClientHeight = 428
  ClientWidth = 751
  Color = clBtnFace
  Font.Charset = DEFAULT_CHARSET
  Font.Color = clWindowText
  Font.Height = -11
  Font.Name = 'Tahoma'
  Font.Style = []
  Menu = MainMenu1
  OldCreateOrder = False
  PixelsPerInch = 96
  TextHeight = 13
  object Label1: TLabel
    Left = 246
    Top = 127
    Width = 3
    Height = 13
    Align = alCustom
    Alignment = taCenter
    BiDiMode = bdLeftToRight
    ParentBiDiMode = False
  end
  object Label2: TLabel
    Left = 246
    Top = 328
    Width = 31
    Height = 13
    Caption = 'Label2'
    Color = clWhite
    ParentColor = False
  end
  object Button1: TButton
    Left = 104
    Top = 64
    Width = 129
    Height = 49
    Cursor = crHandPoint
    Caption = 'Affiche la valeur du d'#233
    TabOrder = 0
    OnClick = Button1Click
  end
  object Button2: TButton
    Left = 448
    Top = 64
    Width = 129
    Height = 49
    Cursor = crHandPoint
    Caption = 'tire le d'#233
    TabOrder = 1
  end
  object Button3: TButton
    Left = 104
    Top = 238
    Width = 129
    Height = 53
    Cursor = crHandPoint
    Caption = 'score total'
    TabOrder = 2
  end
  object Button4: TButton
    Left = 448
    Top = 238
    Width = 129
    Height = 53
    Cursor = crHandPoint
    Caption = 'remise '#224' z'#233'ro du score'
    TabOrder = 3
  end
  object MainMenu1: TMainMenu
    Left = 8
    Top = 8
    object Fichier1: TMenuItem
      Caption = 'Fichier'
    end
    object choisir1: TMenuItem
      Caption = 'choisir'
      object de1: TMenuItem
        Caption = 'de'
      end
      object dehisto1: TMenuItem
        Caption = 'dehisto'
      end
    end
  end
  object Timer1: TTimer
    Left = 712
    Top = 8
  end
end