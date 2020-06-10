object Form1: TForm1
  Left = 0
  Top = 0
  Cursor = crNo
  Caption = 'Form1'
  ClientHeight = 441
  ClientWidth = 877
  Color = clGradientActiveCaption
  Font.Charset = DEFAULT_CHARSET
  Font.Color = clWindowText
  Font.Height = -11
  Font.Name = 'Tahoma'
  Font.Style = []
  OldCreateOrder = False
  PixelsPerInch = 96
  TextHeight = 13
  object Label1: TLabel
    Left = 19
    Top = 144
    Width = 6
    Height = 13
    Caption = '1'
    Color = clWhite
    ParentColor = False
  end
  object Label2: TLabel
    Left = 19
    Top = 184
    Width = 18
    Height = 13
    Caption = '2'
    Color = clWhite
    ParentColor = False
  end
  object Button1: TButton
    Left = 8
    Top = 8
    Width = 145
    Height = 41
    Cursor = crHandPoint
    Caption = 'CONNEXION'
    Font.Charset = ANSI_CHARSET
    Font.Color = clWindowText
    Font.Height = -16
    Font.Name = 'Comic Sans MS'
    Font.Style = []
    ParentFont = False
    TabOrder = 0
    OnClick = Connexion
  end
  object Button2: TButton
    Left = 8
    Top = 72
    Width = 145
    Height = 41
    Cursor = crAppStart
    Caption = 'DECONNEXION'
    Font.Charset = ANSI_CHARSET
    Font.Color = clWindowText
    Font.Height = -16
    Font.Name = 'Comic Sans MS'
    Font.Style = []
    ParentFont = False
    TabOrder = 1
    OnClick = Deconnexion
  end
  object OUT_1: TButton
    Left = 19
    Top = 344
    Width = 75
    Height = 25
    Cursor = crHandPoint
    Caption = 'OUT 1'
    Font.Charset = ANSI_CHARSET
    Font.Color = clWindowText
    Font.Height = -16
    Font.Name = 'Segoe Script'
    Font.Style = []
    ParentFont = False
    TabOrder = 2
    OnClick = OUT_1Click
  end
  object OUT_2: TButton
    Left = 120
    Top = 344
    Width = 75
    Height = 25
    Cursor = crHandPoint
    Caption = 'OUT 2'
    Font.Charset = ANSI_CHARSET
    Font.Color = clWindowText
    Font.Height = -16
    Font.Name = 'Segoe Script'
    Font.Style = []
    ParentFont = False
    TabOrder = 3
    OnClick = OUT_2Click
  end
  object OUT_3: TButton
    Left = 224
    Top = 344
    Width = 75
    Height = 25
    Cursor = crHandPoint
    Caption = 'OUT 3'
    Font.Charset = ANSI_CHARSET
    Font.Color = clWindowText
    Font.Height = -16
    Font.Name = 'Segoe Script'
    Font.Style = []
    ParentFont = False
    TabOrder = 4
    OnClick = OUT_3Click
  end
  object OUT_4: TButton
    Left = 328
    Top = 344
    Width = 75
    Height = 25
    Cursor = crHandPoint
    Caption = 'OUT 4'
    Font.Charset = ANSI_CHARSET
    Font.Color = clWindowText
    Font.Height = -16
    Font.Name = 'Segoe Script'
    Font.Style = []
    ParentFont = False
    TabOrder = 5
    OnClick = OUT_4Click
  end
  object OUT_5: TButton
    Left = 432
    Top = 344
    Width = 75
    Height = 25
    Cursor = crHandPoint
    Caption = 'OUT 5'
    Font.Charset = ANSI_CHARSET
    Font.Color = clWindowText
    Font.Height = -16
    Font.Name = 'Segoe Script'
    Font.Style = []
    ParentFont = False
    TabOrder = 6
    OnClick = OUT_5Click
  end
  object OUT_6: TButton
    Left = 536
    Top = 344
    Width = 75
    Height = 25
    Cursor = crHandPoint
    Caption = 'OUT 6'
    Font.Charset = ANSI_CHARSET
    Font.Color = clWindowText
    Font.Height = -16
    Font.Name = 'Segoe Script'
    Font.Style = []
    ParentFont = False
    TabOrder = 7
    OnClick = OUT_6Click
  end
  object OUT_7: TButton
    Left = 640
    Top = 344
    Width = 75
    Height = 25
    Cursor = crHandPoint
    Caption = 'OUT 7'
    Font.Charset = ANSI_CHARSET
    Font.Color = clWindowText
    Font.Height = -16
    Font.Name = 'Segoe Script'
    Font.Style = []
    ParentFont = False
    TabOrder = 8
    OnClick = OUT_7Click
  end
  object OUT_8: TButton
    Left = 744
    Top = 344
    Width = 75
    Height = 25
    Cursor = crHandPoint
    Caption = 'OUT 8'
    Font.Charset = ANSI_CHARSET
    Font.Color = clWindowText
    Font.Height = -16
    Font.Name = 'Segoe Script'
    Font.Style = []
    ParentFont = False
    TabOrder = 9
    OnClick = OUT_8Click
  end
  object ALL: TButton
    Left = 330
    Top = 375
    Width = 73
    Height = 49
    Cursor = crHandPoint
    Caption = 'Allumer'
    Font.Charset = ANSI_CHARSET
    Font.Color = clWindowText
    Font.Height = -16
    Font.Name = 'Papyrus'
    Font.Style = []
    ParentFont = False
    TabOrder = 10
    OnClick = ALLClick
  end
  object Nul: TButton
    Left = 432
    Top = 375
    Width = 73
    Height = 48
    Cursor = crHandPoint
    Caption = 'Eteindre'
    Font.Charset = ANSI_CHARSET
    Font.Color = clWindowText
    Font.Height = -16
    Font.Name = 'Papyrus'
    Font.Style = []
    ParentFont = False
    TabOrder = 11
    OnClick = NulClick
  end
  object Timer1: TTimer
    Enabled = False
    OnTimer = Timer1Timer
    Left = 848
    Top = 408
  end
end
