<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Kalkulator</title>
</head>
<body>
    <div class="topnav"></div>
    <div class="dataInn">
        <form action="">
            <label for="lokasjon">Lokasjon</label>
            <select name="lokasjon" id="lokasjon">
                <option value="">Hønefoss</option>
                <option value="">Dokka</option>
                <option value="">Askim</option>
                <option value="">Nannestad</option>
            </select>
            <div class="pris">95</div>
            <label for="distanse">Kjørelengde i meter</label>
            <input type="text" name="distanse" class="distanse">
            <!--<br>-->
            <label for="m3">m3/daa</label>
            <select name="m3" id="m3">
                <option value="">0</option>
                <option value="2">15-20 m3/daa</option>
                <option value="7">10-15 m3/daa</option>
                <option value="12">5-10 m3/daa</option>
                <option value="18">Inntill 5 m3/daa</option>
            </select>
            <div class="pris">12</div>
            <label for="overflate">Overflate</label>
            <select name="overflate" id="overflate">
                <option value="0">0</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
            <div class="pris">3</div>
            <label for="velteplass">Velteplass</label>
            <select name="velteplass" id="velteplass">
                <option value="">0</option>
                <option value="">3</option>
            </select>
            <div class="pris">3</div>
            <label for="underskog">Underskog</label>
            <select name="" id="">
                <option value="0">0</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
            </select>
            <div class="pris">3</div>
            <label for="antSort">Antall sortiment</label>
            <select name="antSort" id="">
                <option value="0">0</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
            </select>
            <div class="pris">3</div>
            <label for="annet">Annet:</label>
            <select name="annet" id="manuell">
                <option value="0">0</option>
                <option value="10">10-20% volum tillegg</option>
                <option value="20">20-30% volum tillegg</option>
            </select>
            <div class="pris">10</div>
            <input type="submit" value="Regn ut">
        </form>
    </div>
    <div class="andre">
        <br><h4>Andre tillegg</h4>
            <input type="checkbox" name="1" id="">
            <label for="1">Bæreevne i hogstfelt og basveg</label>
            <input type="checkbox" name="2" id="">
            <label for="2">Motkjøring med lass</label>
            <input type="checkbox" name="3" id="">
            <label for="3">Terrenghelning i hogstfeltet</label>
            <input type="checkbox" name="4" id="">
            <label for="4">Mye underskog i hogstfeltet</label>
            <input type="checkbox" name="5" id="">
            <label for="5">Arrondering i hogst/kjøring</label>
            <input type="checkbox" name="6" id="">
            <label for="6">Linjestrekk/tekniske innrettninger</label>
            <input type="checkbox" name="7" id="">
            <label for="7">Vannskelige trær</label>
            <input type="checkbox" name="8" id="">
            <label for="8">Hensyn til friluftsliv</label>
    </div>
    <div class="basisAndre">
        <h3>Basispris: 95</h3>
        <h3>Andre tillegg: 0</h3>
        <h3>Driftspris: 0</h3>
    </div>
<table>
    <h3>Kjørelengde meter</h3>
    <tr>
        <th>Middelstamme dm3</th>
        <th>Under 300</th>
        <th>300-400</th>
        <th>401-500</th>
        <th>501-600</th>
        <th>601-700</th>
        <th>701-800</th>
        <th>801-900</th>
    </tr>
    <tr>
        <th>>400</th>
        <td>95</td>
        <td>100</td>
        <td>105</td>
        <td>110</td>
        <td>115</td>
        <td>120</td>
        <td>125</td>
    </tr>
    <tr>
        <th>301-400</th>
        <td>106</td>
        <td>111</td>
        <td>116</td>
        <td>121</td>
        <td>126</td>
        <td>131</td>
        <td>136</td>
    </tr>
    <tr>
        <th>201-300</th>
        <td>113</td>
        <td>118</td>
        <td>123</td>
        <td>128</td>
        <td>133</td>
        <td>138</td>
        <td>143</td>
    </tr>
    <tr>
        <th>171-200</th>
        <td>117</td>
        <td>123</td>
        <td>127</td>
        <td>133</td>
        <td>137</td>
        <td>143</td>
        <td>147</td>
    </tr>
    <tr>
        <th>161-170</th>
        <td>121</td>
        <td>126</td>
        <td>131</td>
        <td>136</td>
        <td>141</td>
        <td>146</td>
        <td>151</td>
    </tr>
    <tr>
        <th>151-160</th>
        <td>123</td>
        <td>128</td>
        <td>133</td>
        <td>138</td>
        <td>143</td>
        <td>148</td>
        <td>153</td>
    </tr>
    <tr>
        <th>140-150</th>
        <td>124</td>
        <td>129</td>
        <td>134</td>
        <td>139</td>
        <td>144</td>
        <td>149</td>
        <td>154</td>
    </tr>
    <tr>
        <th>Under 140</th>
        <td>125</td>
        <td>135</td>
        <td>140</td>
        <td>145</td>
        <td>150</td>
        <td>155</td>
        <td>160</td>
    </tr>
</table>
<img src="vikenskog_logo_horisontal.png" alt="vikenSkogLogo">
</body>
</html>