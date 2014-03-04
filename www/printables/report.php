<?php
	/* FRCS
    Copyright (C) 2014 Jon Penn

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU Affero General Public License as
    published by the Free Software Foundation, either version 3 of the
    License, or (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU Affero General Public License for more details.

    You should have received a copy of the GNU Affero General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>. */
	
	require_once(dirname(__FILE__) . '/../../includes/db.inc.php');
	
	header('Content-type: application/vnd.oasis.opendocument.text');
	header('Content-Disposition: attachment; filename="report.fodt"');
	
	$m = $_GET['match'];
	
	echo '<?xml'; // this avoids short tag errors
?> version="1.0" encoding="UTF-8"?>

<office:document xmlns:office="urn:oasis:names:tc:opendocument:xmlns:office:1.0" xmlns:style="urn:oasis:names:tc:opendocument:xmlns:style:1.0" xmlns:text="urn:oasis:names:tc:opendocument:xmlns:text:1.0" xmlns:table="urn:oasis:names:tc:opendocument:xmlns:table:1.0" xmlns:draw="urn:oasis:names:tc:opendocument:xmlns:drawing:1.0" xmlns:fo="urn:oasis:names:tc:opendocument:xmlns:xsl-fo-compatible:1.0" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:meta="urn:oasis:names:tc:opendocument:xmlns:meta:1.0" xmlns:number="urn:oasis:names:tc:opendocument:xmlns:datastyle:1.0" xmlns:svg="urn:oasis:names:tc:opendocument:xmlns:svg-compatible:1.0" xmlns:chart="urn:oasis:names:tc:opendocument:xmlns:chart:1.0" xmlns:dr3d="urn:oasis:names:tc:opendocument:xmlns:dr3d:1.0" xmlns:math="http://www.w3.org/1998/Math/MathML" xmlns:form="urn:oasis:names:tc:opendocument:xmlns:form:1.0" xmlns:script="urn:oasis:names:tc:opendocument:xmlns:script:1.0" xmlns:config="urn:oasis:names:tc:opendocument:xmlns:config:1.0" xmlns:ooo="http://openoffice.org/2004/office" xmlns:ooow="http://openoffice.org/2004/writer" xmlns:oooc="http://openoffice.org/2004/calc" xmlns:dom="http://www.w3.org/2001/xml-events" xmlns:xforms="http://www.w3.org/2002/xforms" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:rpt="http://openoffice.org/2005/report" xmlns:of="urn:oasis:names:tc:opendocument:xmlns:of:1.2" xmlns:xhtml="http://www.w3.org/1999/xhtml" xmlns:grddl="http://www.w3.org/2003/g/data-view#" xmlns:tableooo="http://openoffice.org/2009/table" xmlns:field="urn:openoffice:names:experimental:ooo-ms-interop:xmlns:field:1.0" xmlns:formx="urn:openoffice:names:experimental:ooxml-odf-interop:xmlns:form:1.0" xmlns:css3t="http://www.w3.org/TR/css3-text/" office:version="1.2" office:mimetype="application/vnd.oasis.opendocument.text">
 <office:meta><meta:creation-date>2014-02-28T10:12:17</meta:creation-date><dc:date>2014-03-02T15:50:21</dc:date><meta:editing-duration>PT44M14S</meta:editing-duration><meta:editing-cycles>12</meta:editing-cycles><meta:generator>LibreOffice/3.5$Linux_x86 LibreOffice_project/350m1$Build-2</meta:generator><meta:document-statistic meta:table-count="7" meta:image-count="6" meta:object-count="0" meta:page-count="1" meta:paragraph-count="110" meta:word-count="184" meta:character-count="1132" meta:non-whitespace-character-count="1054"/></office:meta>
 <office:settings>
  <config:config-item-set config:name="ooo:view-settings">
   <config:config-item config:name="ViewAreaTop" config:type="int">9294</config:config-item>
   <config:config-item config:name="ViewAreaLeft" config:type="int">0</config:config-item>
   <config:config-item config:name="ViewAreaWidth" config:type="int">32314</config:config-item>
   <config:config-item config:name="ViewAreaHeight" config:type="int">14273</config:config-item>
   <config:config-item config:name="ShowRedlineChanges" config:type="boolean">true</config:config-item>
   <config:config-item config:name="InBrowseMode" config:type="boolean">false</config:config-item>
   <config:config-item-map-indexed config:name="Views">
    <config:config-item-map-entry>
     <config:config-item config:name="ViewId" config:type="string">view2</config:config-item>
     <config:config-item config:name="ViewLeft" config:type="int">9421</config:config-item>
     <config:config-item config:name="ViewTop" config:type="int">17902</config:config-item>
     <config:config-item config:name="VisibleLeft" config:type="int">0</config:config-item>
     <config:config-item config:name="VisibleTop" config:type="int">9294</config:config-item>
     <config:config-item config:name="VisibleRight" config:type="int">32313</config:config-item>
     <config:config-item config:name="VisibleBottom" config:type="int">23566</config:config-item>
     <config:config-item config:name="ZoomType" config:type="short">0</config:config-item>
     <config:config-item config:name="ViewLayoutColumns" config:type="short">0</config:config-item>
     <config:config-item config:name="ViewLayoutBookMode" config:type="boolean">false</config:config-item>
     <config:config-item config:name="ZoomFactor" config:type="short">100</config:config-item>
     <config:config-item config:name="IsSelectedFrame" config:type="boolean">false</config:config-item>
    </config:config-item-map-entry>
   </config:config-item-map-indexed>
  </config:config-item-set>
  <config:config-item-set config:name="ooo:configuration-settings">
   <config:config-item config:name="PrintAnnotationMode" config:type="short">0</config:config-item>
   <config:config-item config:name="PrintHiddenText" config:type="boolean">false</config:config-item>
   <config:config-item config:name="PrintDrawings" config:type="boolean">true</config:config-item>
   <config:config-item config:name="PrintProspectRTL" config:type="boolean">false</config:config-item>
   <config:config-item config:name="PrintBlackFonts" config:type="boolean">false</config:config-item>
   <config:config-item config:name="PrintTextPlaceholder" config:type="boolean">false</config:config-item>
   <config:config-item config:name="PrintProspect" config:type="boolean">false</config:config-item>
   <config:config-item config:name="PrintSingleJobs" config:type="boolean">false</config:config-item>
   <config:config-item config:name="PrintRightPages" config:type="boolean">true</config:config-item>
   <config:config-item config:name="PrintGraphics" config:type="boolean">true</config:config-item>
   <config:config-item config:name="PrintPaperFromSetup" config:type="boolean">false</config:config-item>
   <config:config-item config:name="PrinterSetup" config:type="base64Binary"/>
   <config:config-item config:name="PrinterName" config:type="string"/>
   <config:config-item config:name="IgnoreFirstLineIndentInNumbering" config:type="boolean">false</config:config-item>
   <config:config-item config:name="CollapseEmptyCellPara" config:type="boolean">true</config:config-item>
   <config:config-item config:name="UnbreakableNumberings" config:type="boolean">false</config:config-item>
   <config:config-item config:name="PrintEmptyPages" config:type="boolean">true</config:config-item>
   <config:config-item config:name="MathBaselineAlignment" config:type="boolean">true</config:config-item>
   <config:config-item config:name="UnxForceZeroExtLeading" config:type="boolean">false</config:config-item>
   <config:config-item config:name="TabAtLeftIndentForParagraphsInList" config:type="boolean">false</config:config-item>
   <config:config-item config:name="PrintReversed" config:type="boolean">false</config:config-item>
   <config:config-item config:name="TabsRelativeToIndent" config:type="boolean">true</config:config-item>
   <config:config-item config:name="LoadReadonly" config:type="boolean">false</config:config-item>
   <config:config-item config:name="ConsiderTextWrapOnObjPos" config:type="boolean">false</config:config-item>
   <config:config-item config:name="TableRowKeep" config:type="boolean">false</config:config-item>
   <config:config-item config:name="PrintLeftPages" config:type="boolean">true</config:config-item>
   <config:config-item config:name="DoNotJustifyLinesWithManualBreak" config:type="boolean">false</config:config-item>
   <config:config-item config:name="ClipAsCharacterAnchoredWriterFlyFrames" config:type="boolean">false</config:config-item>
   <config:config-item config:name="TabOverflow" config:type="boolean">true</config:config-item>
   <config:config-item config:name="DoNotResetParaAttrsForNumFont" config:type="boolean">false</config:config-item>
   <config:config-item config:name="IsKernAsianPunctuation" config:type="boolean">false</config:config-item>
   <config:config-item config:name="UseFormerTextWrapping" config:type="boolean">false</config:config-item>
   <config:config-item config:name="FieldAutoUpdate" config:type="boolean">true</config:config-item>
   <config:config-item config:name="AllowPrintJobCancel" config:type="boolean">true</config:config-item>
   <config:config-item config:name="PrinterIndependentLayout" config:type="string">high-resolution</config:config-item>
   <config:config-item config:name="UpdateFromTemplate" config:type="boolean">true</config:config-item>
   <config:config-item config:name="AddParaSpacingToTableCells" config:type="boolean">true</config:config-item>
   <config:config-item config:name="UseFormerLineSpacing" config:type="boolean">false</config:config-item>
   <config:config-item config:name="CurrentDatabaseDataSource" config:type="string"/>
   <config:config-item config:name="SaveGlobalDocumentLinks" config:type="boolean">false</config:config-item>
   <config:config-item config:name="OutlineLevelYieldsNumbering" config:type="boolean">false</config:config-item>
   <config:config-item config:name="UseOldNumbering" config:type="boolean">false</config:config-item>
   <config:config-item config:name="IsLabelDocument" config:type="boolean">false</config:config-item>
   <config:config-item config:name="SaveVersionOnClose" config:type="boolean">false</config:config-item>
   <config:config-item config:name="CurrentDatabaseCommandType" config:type="int">0</config:config-item>
   <config:config-item config:name="SmallCapsPercentage66" config:type="boolean">false</config:config-item>
   <config:config-item config:name="AlignTabStopPosition" config:type="boolean">true</config:config-item>
   <config:config-item config:name="AddExternalLeading" config:type="boolean">true</config:config-item>
   <config:config-item config:name="PrintPageBackground" config:type="boolean">true</config:config-item>
   <config:config-item config:name="DoNotCaptureDrawObjsOnPage" config:type="boolean">false</config:config-item>
   <config:config-item config:name="RedlineProtectionKey" config:type="base64Binary"/>
   <config:config-item config:name="UseOldPrinterMetrics" config:type="boolean">false</config:config-item>
   <config:config-item config:name="IgnoreTabsAndBlanksForLineCalculation" config:type="boolean">false</config:config-item>
   <config:config-item config:name="ProtectForm" config:type="boolean">false</config:config-item>
   <config:config-item config:name="CurrentDatabaseCommand" config:type="string"/>
   <config:config-item config:name="ApplyUserData" config:type="boolean">true</config:config-item>
   <config:config-item config:name="ChartAutoUpdate" config:type="boolean">true</config:config-item>
   <config:config-item config:name="InvertBorderSpacing" config:type="boolean">false</config:config-item>
   <config:config-item config:name="LinkUpdateMode" config:type="short">1</config:config-item>
   <config:config-item config:name="UseFormerObjectPositioning" config:type="boolean">false</config:config-item>
   <config:config-item config:name="PrintFaxName" config:type="string"/>
   <config:config-item config:name="AddParaTableSpacing" config:type="boolean">true</config:config-item>
   <config:config-item config:name="PrintTables" config:type="boolean">true</config:config-item>
   <config:config-item config:name="AddParaTableSpacingAtStart" config:type="boolean">true</config:config-item>
   <config:config-item config:name="AddFrameOffsets" config:type="boolean">false</config:config-item>
   <config:config-item config:name="PrintControls" config:type="boolean">true</config:config-item>
   <config:config-item config:name="CharacterCompressionType" config:type="short">0</config:config-item>
  </config:config-item-set>
 </office:settings>
 <office:scripts>
  <office:script script:language="ooo:Basic">
   <ooo:libraries xmlns:ooo="http://openoffice.org/2004/office" xmlns:xlink="http://www.w3.org/1999/xlink">
    <ooo:library-embedded ooo:name="Standard"/>
   </ooo:libraries>
  </office:script>
 </office:scripts>
 <office:font-face-decls>
  <style:font-face style:name="DejaVu Sans1" svg:font-family="&apos;DejaVu Sans&apos;" style:font-family-generic="swiss"/>
  <style:font-face style:name="DejaVu Sans Mono" svg:font-family="&apos;DejaVu Sans Mono&apos;" style:font-family-generic="modern" style:font-pitch="fixed"/>
  <style:font-face style:name="Liberation Serif" svg:font-family="&apos;Liberation Serif&apos;" style:font-family-generic="roman" style:font-pitch="variable"/>
  <style:font-face style:name="Liberation Sans" svg:font-family="&apos;Liberation Sans&apos;" style:font-family-generic="swiss" style:font-pitch="variable"/>
  <style:font-face style:name="DejaVu Sans" svg:font-family="&apos;DejaVu Sans&apos;" style:font-family-generic="system" style:font-pitch="variable"/>
  <style:font-face style:name="Droid Sans" svg:font-family="&apos;Droid Sans&apos;" style:font-family-generic="system" style:font-pitch="variable"/>
 </office:font-face-decls>
 <office:styles>
  <style:default-style style:family="graphic">
   <style:graphic-properties svg:stroke-color="#808080" draw:fill-color="#cfe7f5" fo:wrap-option="no-wrap" draw:shadow-offset-x="0.1181in" draw:shadow-offset-y="0.1181in" draw:start-line-spacing-horizontal="0.1114in" draw:start-line-spacing-vertical="0.1114in" draw:end-line-spacing-horizontal="0.1114in" draw:end-line-spacing-vertical="0.1114in" style:flow-with-text="false"/>
   <style:paragraph-properties style:text-autospace="ideograph-alpha" style:line-break="strict" style:writing-mode="lr-tb" style:font-independent-line-spacing="false">
    <style:tab-stops/>
   </style:paragraph-properties>
   <style:text-properties style:use-window-font-color="true" fo:font-size="12pt" fo:language="en" fo:country="US" style:letter-kerning="true" style:font-size-asian="10.5pt" style:language-asian="zh" style:country-asian="CN" style:font-size-complex="12pt" style:language-complex="hi" style:country-complex="IN"/>
  </style:default-style>
  <style:default-style style:family="paragraph">
   <style:paragraph-properties fo:hyphenation-ladder-count="no-limit" style:text-autospace="ideograph-alpha" style:punctuation-wrap="hanging" style:line-break="strict" style:tab-stop-distance="0.4925in" style:writing-mode="page"/>
   <style:text-properties style:use-window-font-color="true" style:font-name="Liberation Serif" fo:font-size="12pt" fo:language="en" fo:country="US" style:letter-kerning="true" style:font-name-asian="Droid Sans" style:font-size-asian="10.5pt" style:language-asian="zh" style:country-asian="CN" style:font-name-complex="DejaVu Sans" style:font-size-complex="12pt" style:language-complex="hi" style:country-complex="IN" fo:hyphenate="false" fo:hyphenation-remain-char-count="2" fo:hyphenation-push-char-count="2"/>
  </style:default-style>
  <style:default-style style:family="table">
   <style:table-properties table:border-model="collapsing"/>
  </style:default-style>
  <style:default-style style:family="table-row">
   <style:table-row-properties fo:keep-together="auto"/>
  </style:default-style>
  <style:style style:name="Standard" style:family="paragraph" style:class="text"/>
  <style:style style:name="Heading" style:family="paragraph" style:parent-style-name="Standard" style:next-style-name="Text_20_body" style:class="text">
   <style:paragraph-properties fo:margin-top="0.1665in" fo:margin-bottom="0.0835in" fo:keep-with-next="always"/>
   <style:text-properties style:font-name="Liberation Sans" fo:font-size="14pt" style:font-name-asian="Droid Sans" style:font-size-asian="14pt" style:font-name-complex="DejaVu Sans" style:font-size-complex="14pt"/>
  </style:style>
  <style:style style:name="Text_20_body" style:display-name="Text body" style:family="paragraph" style:parent-style-name="Standard" style:class="text">
   <style:paragraph-properties fo:margin-top="0in" fo:margin-bottom="0.0835in"/>
  </style:style>
  <style:style style:name="List" style:family="paragraph" style:parent-style-name="Text_20_body" style:class="list">
   <style:text-properties style:font-size-asian="12pt" style:font-name-complex="DejaVu Sans1"/>
  </style:style>
  <style:style style:name="Caption" style:family="paragraph" style:parent-style-name="Standard" style:class="extra">
   <style:paragraph-properties fo:margin-top="0.0835in" fo:margin-bottom="0.0835in" text:number-lines="false" text:line-number="0"/>
   <style:text-properties fo:font-size="12pt" fo:font-style="italic" style:font-size-asian="12pt" style:font-style-asian="italic" style:font-name-complex="DejaVu Sans1" style:font-size-complex="12pt" style:font-style-complex="italic"/>
  </style:style>
  <style:style style:name="Index" style:family="paragraph" style:parent-style-name="Standard" style:class="index">
   <style:paragraph-properties text:number-lines="false" text:line-number="0"/>
   <style:text-properties style:font-size-asian="12pt" style:font-name-complex="DejaVu Sans1"/>
  </style:style>
  <style:style style:name="Table_20_Contents" style:display-name="Table Contents" style:family="paragraph" style:parent-style-name="Standard" style:class="extra">
   <style:paragraph-properties text:number-lines="false" text:line-number="0"/>
  </style:style>
  <style:style style:name="Table_20_Heading" style:display-name="Table Heading" style:family="paragraph" style:parent-style-name="Table_20_Contents" style:class="extra">
   <style:paragraph-properties fo:text-align="center" style:justify-single-word="false" text:number-lines="false" text:line-number="0"/>
   <style:text-properties fo:font-weight="bold" style:font-weight-asian="bold" style:font-weight-complex="bold"/>
  </style:style>
  <style:style style:name="Graphics" style:family="graphic">
   <style:graphic-properties text:anchor-type="paragraph" svg:x="0in" svg:y="0in" style:wrap="dynamic" style:number-wrapped-paragraphs="no-limit" style:wrap-contour="false" style:vertical-pos="top" style:vertical-rel="paragraph" style:horizontal-pos="center" style:horizontal-rel="paragraph"/>
  </style:style>
  <text:outline-style style:name="Outline">
   <text:outline-level-style text:level="1" style:num-format="">
    <style:list-level-properties text:list-level-position-and-space-mode="label-alignment">
     <style:list-level-label-alignment text:label-followed-by="listtab" text:list-tab-stop-position="0.3in" fo:text-indent="-0.3in" fo:margin-left="0.3in"/>
    </style:list-level-properties>
   </text:outline-level-style>
   <text:outline-level-style text:level="2" style:num-format="">
    <style:list-level-properties text:list-level-position-and-space-mode="label-alignment">
     <style:list-level-label-alignment text:label-followed-by="listtab" text:list-tab-stop-position="0.4in" fo:text-indent="-0.4in" fo:margin-left="0.4in"/>
    </style:list-level-properties>
   </text:outline-level-style>
   <text:outline-level-style text:level="3" style:num-format="">
    <style:list-level-properties text:list-level-position-and-space-mode="label-alignment">
     <style:list-level-label-alignment text:label-followed-by="listtab" text:list-tab-stop-position="0.5in" fo:text-indent="-0.5in" fo:margin-left="0.5in"/>
    </style:list-level-properties>
   </text:outline-level-style>
   <text:outline-level-style text:level="4" style:num-format="">
    <style:list-level-properties text:list-level-position-and-space-mode="label-alignment">
     <style:list-level-label-alignment text:label-followed-by="listtab" text:list-tab-stop-position="0.6in" fo:text-indent="-0.6in" fo:margin-left="0.6in"/>
    </style:list-level-properties>
   </text:outline-level-style>
   <text:outline-level-style text:level="5" style:num-format="">
    <style:list-level-properties text:list-level-position-and-space-mode="label-alignment">
     <style:list-level-label-alignment text:label-followed-by="listtab" text:list-tab-stop-position="0.7in" fo:text-indent="-0.7in" fo:margin-left="0.7in"/>
    </style:list-level-properties>
   </text:outline-level-style>
   <text:outline-level-style text:level="6" style:num-format="">
    <style:list-level-properties text:list-level-position-and-space-mode="label-alignment">
     <style:list-level-label-alignment text:label-followed-by="listtab" text:list-tab-stop-position="0.8in" fo:text-indent="-0.8in" fo:margin-left="0.8in"/>
    </style:list-level-properties>
   </text:outline-level-style>
   <text:outline-level-style text:level="7" style:num-format="">
    <style:list-level-properties text:list-level-position-and-space-mode="label-alignment">
     <style:list-level-label-alignment text:label-followed-by="listtab" text:list-tab-stop-position="0.9in" fo:text-indent="-0.9in" fo:margin-left="0.9in"/>
    </style:list-level-properties>
   </text:outline-level-style>
   <text:outline-level-style text:level="8" style:num-format="">
    <style:list-level-properties text:list-level-position-and-space-mode="label-alignment">
     <style:list-level-label-alignment text:label-followed-by="listtab" text:list-tab-stop-position="1in" fo:text-indent="-1in" fo:margin-left="1in"/>
    </style:list-level-properties>
   </text:outline-level-style>
   <text:outline-level-style text:level="9" style:num-format="">
    <style:list-level-properties text:list-level-position-and-space-mode="label-alignment">
     <style:list-level-label-alignment text:label-followed-by="listtab" text:list-tab-stop-position="1.1in" fo:text-indent="-1.1in" fo:margin-left="1.1in"/>
    </style:list-level-properties>
   </text:outline-level-style>
   <text:outline-level-style text:level="10" style:num-format="">
    <style:list-level-properties text:list-level-position-and-space-mode="label-alignment">
     <style:list-level-label-alignment text:label-followed-by="listtab" text:list-tab-stop-position="1.2in" fo:text-indent="-1.2in" fo:margin-left="1.2in"/>
    </style:list-level-properties>
   </text:outline-level-style>
  </text:outline-style>
  <text:notes-configuration text:note-class="footnote" style:num-format="1" text:start-value="0" text:footnotes-position="page" text:start-numbering-at="document"/>
  <text:notes-configuration text:note-class="endnote" style:num-format="i" text:start-value="0"/>
  <text:linenumbering-configuration text:number-lines="false" text:offset="0.1965in" style:num-format="1" text:number-position="left" text:increment="5"/>
 </office:styles>
 <office:automatic-styles>
  <style:style style:name="Table1" style:family="table">
   <style:table-properties style:width="9.5in" table:align="margins"/>
  </style:style>
  <style:style style:name="Table1.A" style:family="table-column">
   <style:table-column-properties style:column-width="0.5729in" style:rel-column-width="3952*"/>
  </style:style>
  <style:style style:name="Table1.B" style:family="table-column">
   <style:table-column-properties style:column-width="2.9757in" style:rel-column-width="20527*"/>
  </style:style>
  <style:style style:name="Table1.D" style:family="table-column">
   <style:table-column-properties style:column-width="2.9757in" style:rel-column-width="20529*"/>
  </style:style>
  <style:style style:name="Table1.A1" style:family="table-cell">
   <style:table-cell-properties style:vertical-align="middle" fo:padding="0.0382in" fo:border="none"/>
  </style:style>
  <style:style style:name="Table1.2" style:family="table-row">
   <style:table-row-properties fo:background-color="#ff8080">
    <style:background-image/>
   </style:table-row-properties>
  </style:style>
  <style:style style:name="Table1.3" style:family="table-row">
   <style:table-row-properties fo:background-color="#83caff">
    <style:background-image/>
   </style:table-row-properties>
  </style:style>
  <style:style style:name="Table3" style:family="table">
   <style:table-properties style:width="2.8993in" table:align="margins"/>
  </style:style>
  <style:style style:name="Table3.A" style:family="table-column">
   <style:table-column-properties style:column-width="1.45in" style:rel-column-width="32767*"/>
  </style:style>
  <style:style style:name="Table3.A1" style:family="table-cell">
   <style:table-cell-properties fo:padding="0.0382in" fo:border="0.05pt solid #000000"/>
  </style:style>
  <style:style style:name="Table3.A2" style:family="table-cell">
   <style:table-cell-properties fo:padding="0.0382in" fo:border-left="0.05pt solid #000000" fo:border-right="none" fo:border-top="none" fo:border-bottom="0.05pt solid #000000"/>
  </style:style>
  <style:style style:name="Table3.B2" style:family="table-cell">
   <style:table-cell-properties fo:padding="0.0382in" fo:border-left="0.05pt solid #000000" fo:border-right="0.05pt solid #000000" fo:border-top="none" fo:border-bottom="0.05pt solid #000000"/>
  </style:style>
  <style:style style:name="Table2" style:family="table">
   <style:table-properties style:width="2.8993in" table:align="margins"/>
  </style:style>
  <style:style style:name="Table2.A" style:family="table-column">
   <style:table-column-properties style:column-width="1.45in" style:rel-column-width="32767*"/>
  </style:style>
  <style:style style:name="Table2.A1" style:family="table-cell">
   <style:table-cell-properties fo:padding="0.0382in" fo:border="0.05pt solid #000000"/>
  </style:style>
  <style:style style:name="Table2.A2" style:family="table-cell">
   <style:table-cell-properties fo:padding="0.0382in" fo:border-left="0.05pt solid #000000" fo:border-right="none" fo:border-top="none" fo:border-bottom="0.05pt solid #000000"/>
  </style:style>
  <style:style style:name="Table2.B2" style:family="table-cell">
   <style:table-cell-properties fo:padding="0.0382in" fo:border-left="0.05pt solid #000000" fo:border-right="0.05pt solid #000000" fo:border-top="none" fo:border-bottom="0.05pt solid #000000"/>
  </style:style>
  <style:style style:name="Table4" style:family="table">
   <style:table-properties style:width="2.9in" table:align="margins"/>
  </style:style>
  <style:style style:name="Table4.A" style:family="table-column">
   <style:table-column-properties style:column-width="1.45in" style:rel-column-width="32767*"/>
  </style:style>
  <style:style style:name="Table4.A1" style:family="table-cell">
   <style:table-cell-properties fo:padding="0.0382in" fo:border="0.05pt solid #000000"/>
  </style:style>
  <style:style style:name="Table4.A2" style:family="table-cell">
   <style:table-cell-properties fo:padding="0.0382in" fo:border-left="0.05pt solid #000000" fo:border-right="none" fo:border-top="none" fo:border-bottom="0.05pt solid #000000"/>
  </style:style>
  <style:style style:name="Table4.B2" style:family="table-cell">
   <style:table-cell-properties fo:padding="0.0382in" fo:border-left="0.05pt solid #000000" fo:border-right="0.05pt solid #000000" fo:border-top="none" fo:border-bottom="0.05pt solid #000000"/>
  </style:style>
  <style:style style:name="Table5" style:family="table">
   <style:table-properties style:width="2.8993in" table:align="margins"/>
  </style:style>
  <style:style style:name="Table5.A" style:family="table-column">
   <style:table-column-properties style:column-width="1.45in" style:rel-column-width="32767*"/>
  </style:style>
  <style:style style:name="Table5.A1" style:family="table-cell">
   <style:table-cell-properties fo:padding="0.0382in" fo:border="0.05pt solid #000000"/>
  </style:style>
  <style:style style:name="Table5.A2" style:family="table-cell">
   <style:table-cell-properties fo:padding="0.0382in" fo:border-left="0.05pt solid #000000" fo:border-right="none" fo:border-top="none" fo:border-bottom="0.05pt solid #000000"/>
  </style:style>
  <style:style style:name="Table5.B2" style:family="table-cell">
   <style:table-cell-properties fo:padding="0.0382in" fo:border-left="0.05pt solid #000000" fo:border-right="0.05pt solid #000000" fo:border-top="none" fo:border-bottom="0.05pt solid #000000"/>
  </style:style>
  <style:style style:name="Table6" style:family="table">
   <style:table-properties style:width="2.8993in" table:align="margins"/>
  </style:style>
  <style:style style:name="Table6.A" style:family="table-column">
   <style:table-column-properties style:column-width="1.45in" style:rel-column-width="32767*"/>
  </style:style>
  <style:style style:name="Table6.A1" style:family="table-cell">
   <style:table-cell-properties fo:padding="0.0382in" fo:border="0.05pt solid #000000"/>
  </style:style>
  <style:style style:name="Table6.A2" style:family="table-cell">
   <style:table-cell-properties fo:padding="0.0382in" fo:border-left="0.05pt solid #000000" fo:border-right="none" fo:border-top="none" fo:border-bottom="0.05pt solid #000000"/>
  </style:style>
  <style:style style:name="Table6.B2" style:family="table-cell">
   <style:table-cell-properties fo:padding="0.0382in" fo:border-left="0.05pt solid #000000" fo:border-right="0.05pt solid #000000" fo:border-top="none" fo:border-bottom="0.05pt solid #000000"/>
  </style:style>
  <style:style style:name="Table7" style:family="table">
   <style:table-properties style:width="2.9in" table:align="margins"/>
  </style:style>
  <style:style style:name="Table7.A" style:family="table-column">
   <style:table-column-properties style:column-width="1.45in" style:rel-column-width="32767*"/>
  </style:style>
  <style:style style:name="Table7.A1" style:family="table-cell">
   <style:table-cell-properties fo:padding="0.0382in" fo:border="0.05pt solid #000000"/>
  </style:style>
  <style:style style:name="Table7.A2" style:family="table-cell">
   <style:table-cell-properties fo:padding="0.0382in" fo:border-left="0.05pt solid #000000" fo:border-right="none" fo:border-top="none" fo:border-bottom="0.05pt solid #000000"/>
  </style:style>
  <style:style style:name="Table7.B2" style:family="table-cell">
   <style:table-cell-properties fo:padding="0.0382in" fo:border-left="0.05pt solid #000000" fo:border-right="0.05pt solid #000000" fo:border-top="none" fo:border-bottom="0.05pt solid #000000"/>
  </style:style>
  <style:style style:name="P1" style:family="paragraph" style:parent-style-name="Standard">
   <style:text-properties style:font-name="DejaVu Sans Mono"/>
  </style:style>
  <style:style style:name="P2" style:family="paragraph" style:parent-style-name="Table_20_Contents">
   <style:text-properties style:font-name="DejaVu Sans Mono"/>
  </style:style>
  <style:style style:name="P3" style:family="paragraph" style:parent-style-name="Table_20_Contents">
   <style:paragraph-properties fo:text-align="center" style:justify-single-word="false"/>
   <style:text-properties style:font-name="DejaVu Sans Mono" fo:font-weight="bold" style:font-weight-asian="bold" style:font-weight-complex="bold"/>
  </style:style>
  <style:style style:name="P4" style:family="paragraph" style:parent-style-name="Table_20_Contents">
   <style:paragraph-properties fo:text-align="center" style:justify-single-word="false"/>
   <style:text-properties style:font-name="DejaVu Sans Mono" fo:font-weight="normal" style:font-weight-asian="normal" style:font-weight-complex="normal"/>
  </style:style>
  <style:style style:name="P5" style:family="paragraph" style:parent-style-name="Table_20_Contents">
   <style:paragraph-properties fo:text-align="center" style:justify-single-word="false"/>
   <style:text-properties style:font-name="DejaVu Sans Mono" style:text-underline-style="solid" style:text-underline-width="auto" style:text-underline-color="font-color" fo:font-weight="normal" fo:background-color="#83caff" style:font-weight-asian="normal" style:font-weight-complex="normal"/>
  </style:style>
  <style:style style:name="P6" style:family="paragraph" style:parent-style-name="Table_20_Contents">
   <style:paragraph-properties fo:text-align="center" style:justify-single-word="false"/>
   <style:text-properties style:font-name="DejaVu Sans Mono" style:text-underline-style="solid" style:text-underline-width="auto" style:text-underline-color="font-color" fo:font-weight="normal" fo:background-color="#ff8080" style:font-weight-asian="normal" style:font-weight-complex="normal"/>
  </style:style>
  <style:style style:name="P7" style:family="paragraph" style:parent-style-name="Table_20_Contents">
   <style:text-properties style:font-name="DejaVu Sans Mono" fo:font-size="20pt" style:font-size-asian="17.5pt" style:font-size-complex="20pt"/>
  </style:style>
  <style:style style:name="P8" style:family="paragraph" style:parent-style-name="Table_20_Contents">
   <style:paragraph-properties fo:text-align="end" style:justify-single-word="false"/>
   <style:text-properties style:font-name="DejaVu Sans Mono" fo:font-size="20pt" style:font-size-asian="17.5pt" style:font-size-complex="20pt"/>
  </style:style>
  <style:style style:name="P9" style:family="paragraph" style:parent-style-name="Table_20_Contents">
   <style:text-properties style:font-name="DejaVu Sans Mono"/>
  </style:style>
  <style:style style:name="P10" style:family="paragraph" style:parent-style-name="Table_20_Contents">
   <style:paragraph-properties fo:text-align="center" style:justify-single-word="false"/>
   <style:text-properties style:font-name="DejaVu Sans Mono" fo:font-weight="bold" style:font-weight-asian="bold" style:font-weight-complex="bold"/>
  </style:style>
  <style:style style:name="P11" style:family="paragraph" style:parent-style-name="Table_20_Contents">
   <style:text-properties style:font-name="DejaVu Sans Mono" fo:font-weight="normal" style:font-weight-asian="normal" style:font-weight-complex="normal"/>
  </style:style>
  <style:style style:name="T1" style:family="text">
   <style:text-properties fo:background-color="#e6e6e6"/>
  </style:style>
  <style:style style:name="T2" style:family="text">
   <style:text-properties fo:font-weight="bold" style:font-weight-asian="bold" style:font-weight-complex="bold"/>
  </style:style>
  <style:style style:name="T3" style:family="text">
   <style:text-properties style:text-underline-style="none"/>
  </style:style>
  <style:style style:name="T4" style:family="text">
   <style:text-properties style:text-underline-style="none" fo:font-weight="normal" style:font-weight-asian="normal" style:font-weight-complex="normal"/>
  </style:style>
  <style:style style:name="T5" style:family="text">
   <style:text-properties fo:font-weight="normal" style:font-weight-asian="normal" style:font-weight-complex="normal"/>
  </style:style>
  <style:style style:name="fr1" style:family="graphic" style:parent-style-name="Graphics">
   <style:graphic-properties style:mirror="none" fo:clip="rect(0in, 0in, 0in, 0in)" draw:luminance="0%" draw:contrast="0%" draw:red="0%" draw:green="0%" draw:blue="0%" draw:gamma="100%" draw:color-inversion="false" draw:image-opacity="100%" draw:color-mode="standard"/>
  </style:style>
  <style:page-layout style:name="pm1">
   <style:page-layout-properties fo:page-width="11in" fo:page-height="8.5in" style:num-format="1" style:print-orientation="landscape" fo:margin="0.75in" fo:margin-top="0.75in" fo:margin-bottom="0.75in" fo:margin-left="0.75in" fo:margin-right="0.75in" style:writing-mode="lr-tb" style:footnote-max-height="0in">
    <style:footnote-sep style:width="0.0071in" style:distance-before-sep="0.0398in" style:distance-after-sep="0.0398in" style:line-style="solid" style:adjustment="left" style:rel-width="25%" style:color="#000000"/>
   </style:page-layout-properties>
   <style:header-style/>
   <style:footer-style/>
  </style:page-layout>
 </office:automatic-styles>
 <office:master-styles>
  <style:master-page style:name="Standard" style:page-layout-name="pm1"/>
 </office:master-styles>
 <office:body>
  <office:text>
   <text:sequence-decls>
    <text:sequence-decl text:display-outline-level="0" text:name="Illustration"/>
    <text:sequence-decl text:display-outline-level="0" text:name="Table"/>
    <text:sequence-decl text:display-outline-level="0" text:name="Text"/>
    <text:sequence-decl text:display-outline-level="0" text:name="Drawing"/>
   </text:sequence-decls>
   <table:table table:name="Table1" table:style-name="Table1">
    <table:table-column table:style-name="Table1.A"/>
    <table:table-column table:style-name="Table1.B" table:number-columns-repeated="2"/>
    <table:table-column table:style-name="Table1.D"/>
    <table:table-row>
     <table:table-cell table:style-name="Table1.A1" table:number-columns-spanned="2" office:value-type="string">
      <text:p text:style-name="P7">Match: <text:span text:style-name="T1"><text:s/><?php echo $m;?> </text:span></text:p>
     </table:table-cell>
     <table:covered-table-cell/>
     <table:table-cell table:style-name="Table1.A1" table:number-columns-spanned="2" office:value-type="string">
      <text:p text:style-name="P8">Updated: <text:span text:style-name="T1"><text:s/><?php echo substr(db1('SELECT current_timestamp AS now')->now, 0, 19);?> </text:span></text:p>
     </table:table-cell>
     <table:covered-table-cell/>
    </table:table-row>
    <table:table-row table:style-name="Table1.2">
     <table:table-cell table:style-name="Table1.A1" office:value-type="string">
      <text:p text:style-name="P4"><?php dp('SELECT ROUND(SUM(averagesore), 0) FROM teamsview WHERE teamsview.number IN (SELECT team FROM queueingsview WHERE match=? AND position IN (\'red1\',\'red2\',\'red3\'))', $m);?></text:p>
      <text:p text:style-name="P5">XXX</text:p>
      <text:p text:style-name="P3">XXX</text:p>
     </table:table-cell>
     <table:table-cell table:style-name="Table1.A1" office:value-type="string">
      <table:table table:name="Table3" table:style-name="Table3">
       <table:table-column table:style-name="Table3.A" table:number-columns-repeated="2"/>
       <table:table-row>
        <table:table-cell table:style-name="Table3.A1" table:number-columns-spanned="2" office:value-type="string">
         <text:p text:style-name="P2">T-Name:<?php dp('SELECT name FROM teamsview WHERE teamsview.number=(SELECT red1 FROM matchesview WHERE matchesview.number=?)', $m);?></text:p>
         <text:p text:style-name="P2">R-Name:<?php dp('SELECT robotname FROM teamsview WHERE teamsview.number=(SELECT red1 FROM matchesview WHERE matchesview.number=?)', $m);?></text:p>
         <text:p text:style-name="P11">R-Type:<?php dp('SELECT type FROM teamsview WHERE teamsview.number=(SELECT red1 FROM matchesview WHERE matchesview.number=?)', $m);?></text:p>
        </table:table-cell>
        <table:covered-table-cell/>
       </table:table-row>
       <table:table-row>
        <table:table-cell table:style-name="Table3.A2" office:value-type="string">
         <text:p text:style-name="P11">Avg Scr:<text:span text:style-name="T2"><?php dp('SELECT ROUND(averagesore, 0) FROM teamsview WHERE teamsview.number=(SELECT red1 FROM matchesview WHERE matchesview.number=?)', $m);?></text:span></text:p>
         <text:p text:style-name="P11">Avg Def:<text:span text:style-name="T2">XXX</text:span></text:p>
        </table:table-cell>
        <table:table-cell table:style-name="Table3.B2" table:number-rows-spanned="3" office:value-type="string">
         <text:p text:style-name="P2"><draw:frame draw:style-name="fr1" draw:name="graphics2" text:anchor-type="paragraph" svg:width="1.3736in" svg:height="1.3736in" draw:z-index="0"><draw:image>
            <office:binary-data>
				<?php
					$imageid = db1('SELECT imageid FROM teamsview WHERE teamsview.number=(SELECT red1 FROM matchesview WHERE matchesview.number=?)', $m)->imageid;
					echo base64_encode(file_get_contents(dirname(__FILE__) . '/../images/' . $imageid));
				?>
            </office:binary-data>
           </draw:image>
          </draw:frame>Team:<?php dp('SELECT red1 FROM matchesview WHERE matchesview.number=?', $m);?></text:p>
        </table:table-cell>
       </table:table-row>
       <table:table-row>
        <table:table-cell table:style-name="Table3.A2" office:value-type="string">
         <text:p text:style-name="P11">High %:<?php dp('SELECT (CASE WHEN SUM(teleophighballs)+SUM(teleophighfails)=0 THEN -99 ELSE ROUND(SUM(teleophighballs)*100/(SUM(teleophighballs)+SUM(teleophighfails)), 0) END) FROM queueingsview WHERE queueingsview.team=(SELECT red1 FROM matchesview WHERE matchesview.number=?)', $m);?></text:p>
         <text:p text:style-name="P11">High #:<?php dp('SELECT ROUND(AVG(teleophighballs), 1) FROM queueingsview WHERE queueingsview.team=(SELECT red1 FROM matchesview WHERE matchesview.number=?)', $m);?></text:p>
         <text:p text:style-name="P11">Low #:<?php dp('SELECT ROUND(AVG(teleoplowballs), 1) FROM queueingsview WHERE queueingsview.team=(SELECT red1 FROM matchesview WHERE matchesview.number=?)', $m);?></text:p>
        </table:table-cell>
        <table:covered-table-cell/>
       </table:table-row>
       <table:table-row>
        <table:table-cell table:style-name="Table3.A2" office:value-type="string">
         <text:p text:style-name="P11">Aton Scr:<?php dp('SELECT COUNT(1) FROM queueingsview WHERE queueingsview.team=(SELECT red1 FROM matchesview WHERE matchesview.number=?) AND autonomusball IN (\'lowcold\', \'lowhot\', \'highcold\', \'highhot\')', $m);?></text:p>
         <text:p text:style-name="P11">Aton Try:<?php dp('SELECT COUNT(1) FROM queueingsview WHERE queueingsview.team=(SELECT red1 FROM matchesview WHERE matchesview.number=?) AND startedwithball', $m);?></text:p>
        </table:table-cell>
        <table:covered-table-cell/>
       </table:table-row>
       <table:table-row>
        <table:table-cell table:style-name="Table3.A2" office:value-type="string">
         <text:p text:style-name="P2"><text:span text:style-name="T5">Pass #:<?php dp('SELECT ROUND(AVG(passes), 1) FROM queueingsview WHERE queueingsview.team=(SELECT red1 FROM matchesview WHERE matchesview.number=?)', $m);?></text:span></text:p>
         <text:p text:style-name="P11"><text:span text:style-name="T3">Catch #:<?php dp('SELECT ROUND(AVG(receves), 1) FROM queueingsview WHERE queueingsview.team=(SELECT red1 FROM matchesview WHERE matchesview.number=?)', $m);?></text:span></text:p>
        </table:table-cell>
        <table:table-cell table:style-name="Table3.B2" office:value-type="string">
         <text:p text:style-name="P11">Truss P%:<?php dp('SELECT (CASE WHEN SUM(trusspasses)+SUM(trussfails)=0 THEN -99 ELSE ROUND(SUM(trusspasses)*100/(SUM(trusspasses)+SUM(trussfails)), 0) END) FROM queueingsview WHERE queueingsview.team=(SELECT red1 FROM matchesview WHERE matchesview.number=?)', $m);?></text:p>
         <text:p text:style-name="P11">Truss C%:<?php dp('SELECT (CASE WHEN SUM(trussreceves)+SUM(trussdrops)=0 THEN -99 ELSE ROUND(SUM(trussreceves)*100/(SUM(trussreceves)+SUM(trussdrops)), 0) END) FROM queueingsview WHERE queueingsview.team=(SELECT red1 FROM matchesview WHERE matchesview.number=?)', $m);?></text:p>
        </table:table-cell>
       </table:table-row>
       <table:table-row>
        <table:table-cell table:style-name="Table3.A2" office:value-type="string">
         <text:p text:style-name="P2">Avg FS:<?php dp('SELECT ROUND(AVG(COALESCE(nontechnicalfouls, 0)*-20+COALESCE(technicalfouls, 0)*-50), 0) FROM queueingsview WHERE queueingsview.team=(SELECT red1 FROM matchesview WHERE matchesview.number=?)', $m);?></text:p>
        </table:table-cell>
        <table:table-cell table:style-name="Table3.B2" office:value-type="string">
         <text:p text:style-name="P11"><text:span text:style-name="T3">Deflected:<?php dp('SELECT ROUND(AVG(teleopdeflected+autonomusdeflected), 1) FROM queueingsview WHERE queueingsview.team=(SELECT red1 FROM matchesview WHERE matchesview.number=?)', $m);?></text:span></text:p>
        </table:table-cell>
       </table:table-row>
      </table:table>
      <text:p text:style-name="P2"/>
     </table:table-cell>
     <table:table-cell table:style-name="Table1.A1" office:value-type="string">
      <table:table table:name="Table3" table:style-name="Table3">
       <table:table-column table:style-name="Table3.A" table:number-columns-repeated="2"/>
       <table:table-row>
        <table:table-cell table:style-name="Table3.A1" table:number-columns-spanned="2" office:value-type="string">
         <text:p text:style-name="P2">T-Name:<?php dp('SELECT name FROM teamsview WHERE teamsview.number=(SELECT red2 FROM matchesview WHERE matchesview.number=?)', $m);?></text:p>
         <text:p text:style-name="P2">R-Name:<?php dp('SELECT robotname FROM teamsview WHERE teamsview.number=(SELECT red2 FROM matchesview WHERE matchesview.number=?)', $m);?></text:p>
         <text:p text:style-name="P11">R-Type:<?php dp('SELECT type FROM teamsview WHERE teamsview.number=(SELECT red2 FROM matchesview WHERE matchesview.number=?)', $m);?></text:p>
        </table:table-cell>
        <table:covered-table-cell/>
       </table:table-row>
       <table:table-row>
        <table:table-cell table:style-name="Table3.A2" office:value-type="string">
         <text:p text:style-name="P11">Avg Scr:<text:span text:style-name="T2"><?php dp('SELECT ROUND(averagesore, 0) FROM teamsview WHERE teamsview.number=(SELECT red2 FROM matchesview WHERE matchesview.number=?)', $m);?></text:span></text:p>
         <text:p text:style-name="P11">Avg Def:<text:span text:style-name="T2">XXX</text:span></text:p>
        </table:table-cell>
        <table:table-cell table:style-name="Table3.B2" table:number-rows-spanned="3" office:value-type="string">
         <text:p text:style-name="P2"><draw:frame draw:style-name="fr1" draw:name="graphics2" text:anchor-type="paragraph" svg:width="1.3736in" svg:height="1.3736in" draw:z-index="0"><draw:image>
            <office:binary-data>
				<?php
					$imageid = db1('SELECT imageid FROM teamsview WHERE teamsview.number=(SELECT red2 FROM matchesview WHERE matchesview.number=?)', $m)->imageid;
					echo base64_encode(file_get_contents(dirname(__FILE__) . '/../images/' . $imageid));
				?>
            </office:binary-data>
           </draw:image>
          </draw:frame>Team:<?php dp('SELECT red2 FROM matchesview WHERE matchesview.number=?', $m);?></text:p>
        </table:table-cell>
       </table:table-row>
       <table:table-row>
        <table:table-cell table:style-name="Table3.A2" office:value-type="string">
         <text:p text:style-name="P11">High %:<?php dp('SELECT (CASE WHEN SUM(teleophighballs)+SUM(teleophighfails)=0 THEN -99 ELSE ROUND(SUM(teleophighballs)*100/(SUM(teleophighballs)+SUM(teleophighfails)), 0) END) FROM queueingsview WHERE queueingsview.team=(SELECT red2 FROM matchesview WHERE matchesview.number=?)', $m);?></text:p>
         <text:p text:style-name="P11">High #:<?php dp('SELECT ROUND(AVG(teleophighballs), 1) FROM queueingsview WHERE queueingsview.team=(SELECT red2 FROM matchesview WHERE matchesview.number=?)', $m);?></text:p>
         <text:p text:style-name="P11">Low #:<?php dp('SELECT ROUND(AVG(teleoplowballs), 1) FROM queueingsview WHERE queueingsview.team=(SELECT red2 FROM matchesview WHERE matchesview.number=?)', $m);?></text:p>
        </table:table-cell>
        <table:covered-table-cell/>
       </table:table-row>
       <table:table-row>
        <table:table-cell table:style-name="Table3.A2" office:value-type="string">
         <text:p text:style-name="P11">Aton Scr:<?php dp('SELECT COUNT(1) FROM queueingsview WHERE queueingsview.team=(SELECT red2 FROM matchesview WHERE matchesview.number=?) AND autonomusball IN (\'lowcold\', \'lowhot\', \'highcold\', \'highhot\')', $m);?></text:p>
         <text:p text:style-name="P11">Aton Try:<?php dp('SELECT COUNT(1) FROM queueingsview WHERE queueingsview.team=(SELECT red2 FROM matchesview WHERE matchesview.number=?) AND startedwithball', $m);?></text:p>
        </table:table-cell>
        <table:covered-table-cell/>
       </table:table-row>
       <table:table-row>
        <table:table-cell table:style-name="Table3.A2" office:value-type="string">
         <text:p text:style-name="P2"><text:span text:style-name="T5">Pass #:<?php dp('SELECT ROUND(AVG(passes), 1) FROM queueingsview WHERE queueingsview.team=(SELECT red2 FROM matchesview WHERE matchesview.number=?)', $m);?></text:span></text:p>
         <text:p text:style-name="P11"><text:span text:style-name="T3">Catch #:<?php dp('SELECT ROUND(AVG(receves), 1) FROM queueingsview WHERE queueingsview.team=(SELECT red2 FROM matchesview WHERE matchesview.number=?)', $m);?></text:span></text:p>
        </table:table-cell>
        <table:table-cell table:style-name="Table3.B2" office:value-type="string">
         <text:p text:style-name="P11">Truss P%:<?php dp('SELECT (CASE WHEN SUM(trusspasses)+SUM(trussfails)=0 THEN -99 ELSE ROUND(SUM(trusspasses)*100/(SUM(trusspasses)+SUM(trussfails)), 0) END) FROM queueingsview WHERE queueingsview.team=(SELECT red2 FROM matchesview WHERE matchesview.number=?)', $m);?></text:p>
         <text:p text:style-name="P11">Truss C%:<?php dp('SELECT (CASE WHEN SUM(trussreceves)+SUM(trussdrops)=0 THEN -99 ELSE ROUND(SUM(trussreceves)*100/(SUM(trussreceves)+SUM(trussdrops)), 0) END) FROM queueingsview WHERE queueingsview.team=(SELECT red2 FROM matchesview WHERE matchesview.number=?)', $m);?></text:p>
        </table:table-cell>
       </table:table-row>
       <table:table-row>
        <table:table-cell table:style-name="Table3.A2" office:value-type="string">
         <text:p text:style-name="P2">Avg FS:<?php dp('SELECT ROUND(AVG(COALESCE(nontechnicalfouls, 0)*-20+COALESCE(technicalfouls, 0)*-50), 0) FROM queueingsview WHERE queueingsview.team=(SELECT red2 FROM matchesview WHERE matchesview.number=?)', $m);?></text:p>
        </table:table-cell>
        <table:table-cell table:style-name="Table3.B2" office:value-type="string">
         <text:p text:style-name="P11"><text:span text:style-name="T3">Deflected:<?php dp('SELECT ROUND(AVG(teleopdeflected+autonomusdeflected), 1) FROM queueingsview WHERE queueingsview.team=(SELECT red2 FROM matchesview WHERE matchesview.number=?)', $m);?></text:span></text:p>
        </table:table-cell>
       </table:table-row>
      </table:table>
      <text:p text:style-name="P2"/>
     </table:table-cell>
     <table:table-cell table:style-name="Table1.A1" office:value-type="string">
      <table:table table:name="Table3" table:style-name="Table3">
       <table:table-column table:style-name="Table3.A" table:number-columns-repeated="2"/>
       <table:table-row>
        <table:table-cell table:style-name="Table3.A1" table:number-columns-spanned="2" office:value-type="string">
         <text:p text:style-name="P2">T-Name:<?php dp('SELECT name FROM teamsview WHERE teamsview.number=(SELECT red3 FROM matchesview WHERE matchesview.number=?)', $m);?></text:p>
         <text:p text:style-name="P2">R-Name:<?php dp('SELECT robotname FROM teamsview WHERE teamsview.number=(SELECT red3 FROM matchesview WHERE matchesview.number=?)', $m);?></text:p>
         <text:p text:style-name="P11">R-Type:<?php dp('SELECT type FROM teamsview WHERE teamsview.number=(SELECT red3 FROM matchesview WHERE matchesview.number=?)', $m);?></text:p>
        </table:table-cell>
        <table:covered-table-cell/>
       </table:table-row>
       <table:table-row>
        <table:table-cell table:style-name="Table3.A2" office:value-type="string">
         <text:p text:style-name="P11">Avg Scr:<text:span text:style-name="T2"><?php dp('SELECT ROUND(averagesore, 0) FROM teamsview WHERE teamsview.number=(SELECT red3 FROM matchesview WHERE matchesview.number=?)', $m);?></text:span></text:p>
         <text:p text:style-name="P11">Avg Def:<text:span text:style-name="T2">XXX</text:span></text:p>
        </table:table-cell>
        <table:table-cell table:style-name="Table3.B2" table:number-rows-spanned="3" office:value-type="string">
         <text:p text:style-name="P2"><draw:frame draw:style-name="fr1" draw:name="graphics2" text:anchor-type="paragraph" svg:width="1.3736in" svg:height="1.3736in" draw:z-index="0"><draw:image>
            <office:binary-data>
				<?php
					$imageid = db1('SELECT imageid FROM teamsview WHERE teamsview.number=(SELECT red3 FROM matchesview WHERE matchesview.number=?)', $m)->imageid;
					echo base64_encode(file_get_contents(dirname(__FILE__) . '/../images/' . $imageid));
				?>
            </office:binary-data>
           </draw:image>
          </draw:frame>Team:<?php dp('SELECT red3 FROM matchesview WHERE matchesview.number=?', $m);?></text:p>
        </table:table-cell>
       </table:table-row>
       <table:table-row>
        <table:table-cell table:style-name="Table3.A2" office:value-type="string">
         <text:p text:style-name="P11">High %:<?php dp('SELECT (CASE WHEN SUM(teleophighballs)+SUM(teleophighfails)=0 THEN -99 ELSE ROUND(SUM(teleophighballs)*100/(SUM(teleophighballs)+SUM(teleophighfails)), 0) END) FROM queueingsview WHERE queueingsview.team=(SELECT red3 FROM matchesview WHERE matchesview.number=?)', $m);?></text:p>
         <text:p text:style-name="P11">High #:<?php dp('SELECT ROUND(AVG(teleophighballs), 1) FROM queueingsview WHERE queueingsview.team=(SELECT red3 FROM matchesview WHERE matchesview.number=?)', $m);?></text:p>
         <text:p text:style-name="P11">Low #:<?php dp('SELECT ROUND(AVG(teleoplowballs), 1) FROM queueingsview WHERE queueingsview.team=(SELECT red3 FROM matchesview WHERE matchesview.number=?)', $m);?></text:p>
        </table:table-cell>
        <table:covered-table-cell/>
       </table:table-row>
       <table:table-row>
        <table:table-cell table:style-name="Table3.A2" office:value-type="string">
         <text:p text:style-name="P11">Aton Scr:<?php dp('SELECT COUNT(1) FROM queueingsview WHERE queueingsview.team=(SELECT red3 FROM matchesview WHERE matchesview.number=?) AND autonomusball IN (\'lowcold\', \'lowhot\', \'highcold\', \'highhot\')', $m);?></text:p>
         <text:p text:style-name="P11">Aton Try:<?php dp('SELECT COUNT(1) FROM queueingsview WHERE queueingsview.team=(SELECT red3 FROM matchesview WHERE matchesview.number=?) AND startedwithball', $m);?></text:p>
        </table:table-cell>
        <table:covered-table-cell/>
       </table:table-row>
       <table:table-row>
        <table:table-cell table:style-name="Table3.A2" office:value-type="string">
         <text:p text:style-name="P2"><text:span text:style-name="T5">Pass #:<?php dp('SELECT ROUND(AVG(passes), 1) FROM queueingsview WHERE queueingsview.team=(SELECT red3 FROM matchesview WHERE matchesview.number=?)', $m);?></text:span></text:p>
         <text:p text:style-name="P11"><text:span text:style-name="T3">Catch #:<?php dp('SELECT ROUND(AVG(receves), 1) FROM queueingsview WHERE queueingsview.team=(SELECT red3 FROM matchesview WHERE matchesview.number=?)', $m);?></text:span></text:p>
        </table:table-cell>
        <table:table-cell table:style-name="Table3.B2" office:value-type="string">
         <text:p text:style-name="P11">Truss P%:<?php dp('SELECT (CASE WHEN SUM(trusspasses)+SUM(trussfails)=0 THEN -99 ELSE ROUND(SUM(trusspasses)*100/(SUM(trusspasses)+SUM(trussfails)), 0) END) FROM queueingsview WHERE queueingsview.team=(SELECT red3 FROM matchesview WHERE matchesview.number=?)', $m);?></text:p>
         <text:p text:style-name="P11">Truss C%:<?php dp('SELECT (CASE WHEN SUM(trussreceves)+SUM(trussdrops)=0 THEN -99 ELSE ROUND(SUM(trussreceves)*100/(SUM(trussreceves)+SUM(trussdrops)), 0) END) FROM queueingsview WHERE queueingsview.team=(SELECT red3 FROM matchesview WHERE matchesview.number=?)', $m);?></text:p>
        </table:table-cell>
       </table:table-row>
       <table:table-row>
        <table:table-cell table:style-name="Table3.A2" office:value-type="string">
         <text:p text:style-name="P2">Avg FS:<?php dp('SELECT ROUND(AVG(COALESCE(nontechnicalfouls, 0)*-20+COALESCE(technicalfouls, 0)*-50), 0) FROM queueingsview WHERE queueingsview.team=(SELECT red3 FROM matchesview WHERE matchesview.number=?)', $m);?></text:p>
        </table:table-cell>
        <table:table-cell table:style-name="Table3.B2" office:value-type="string">
         <text:p text:style-name="P11"><text:span text:style-name="T3">Deflected:<?php dp('SELECT ROUND(AVG(teleopdeflected+autonomusdeflected), 1) FROM queueingsview WHERE queueingsview.team=(SELECT red3 FROM matchesview WHERE matchesview.number=?)', $m);?></text:span></text:p>
        </table:table-cell>
       </table:table-row>
      </table:table>
      <text:p text:style-name="P2"/>
     </table:table-cell>
    </table:table-row>
    <table:table-row table:style-name="Table1.3">
     <table:table-cell table:style-name="Table1.A1" office:value-type="string">
      <text:p text:style-name="P4"><?php dp('SELECT ROUND(SUM(averagesore), 0) FROM teamsview WHERE teamsview.number IN (SELECT team FROM queueingsview WHERE match=? AND position IN (\'blue1\',\'blue2\',\'blue3\'))', $m);?></text:p>
      <text:p text:style-name="P6">XXX</text:p>
      <text:p text:style-name="P3">XXX</text:p>
     </table:table-cell>
     <table:table-cell table:style-name="Table1.A1" office:value-type="string">
      <table:table table:name="Table3" table:style-name="Table3">
       <table:table-column table:style-name="Table3.A" table:number-columns-repeated="2"/>
       <table:table-row>
        <table:table-cell table:style-name="Table3.A1" table:number-columns-spanned="2" office:value-type="string">
         <text:p text:style-name="P2">T-Name:<?php dp('SELECT name FROM teamsview WHERE teamsview.number=(SELECT blue1 FROM matchesview WHERE matchesview.number=?)', $m);?></text:p>
         <text:p text:style-name="P2">R-Name:<?php dp('SELECT robotname FROM teamsview WHERE teamsview.number=(SELECT blue1 FROM matchesview WHERE matchesview.number=?)', $m);?></text:p>
         <text:p text:style-name="P11">R-Type:<?php dp('SELECT type FROM teamsview WHERE teamsview.number=(SELECT blue1 FROM matchesview WHERE matchesview.number=?)', $m);?></text:p>
        </table:table-cell>
        <table:covered-table-cell/>
       </table:table-row>
       <table:table-row>
        <table:table-cell table:style-name="Table3.A2" office:value-type="string">
         <text:p text:style-name="P11">Avg Scr:<text:span text:style-name="T2"><?php dp('SELECT ROUND(averagesore, 0) FROM teamsview WHERE teamsview.number=(SELECT blue1 FROM matchesview WHERE matchesview.number=?)', $m);?></text:span></text:p>
         <text:p text:style-name="P11">Avg Def:<text:span text:style-name="T2">XXX</text:span></text:p>
        </table:table-cell>
        <table:table-cell table:style-name="Table3.B2" table:number-rows-spanned="3" office:value-type="string">
         <text:p text:style-name="P2"><draw:frame draw:style-name="fr1" draw:name="graphics2" text:anchor-type="paragraph" svg:width="1.3736in" svg:height="1.3736in" draw:z-index="0"><draw:image>
            <office:binary-data>
				<?php
					$imageid = db1('SELECT imageid FROM teamsview WHERE teamsview.number=(SELECT blue1 FROM matchesview WHERE matchesview.number=?)', $m)->imageid;
					echo base64_encode(file_get_contents(dirname(__FILE__) . '/../images/' . $imageid));
				?>
            </office:binary-data>
           </draw:image>
          </draw:frame>Team:<?php dp('SELECT blue1 FROM matchesview WHERE matchesview.number=?', $m);?></text:p>
        </table:table-cell>
       </table:table-row>
       <table:table-row>
        <table:table-cell table:style-name="Table3.A2" office:value-type="string">
         <text:p text:style-name="P11">High %:<?php dp('SELECT (CASE WHEN SUM(teleophighballs)+SUM(teleophighfails)=0 THEN -99 ELSE ROUND(SUM(teleophighballs)*100/(SUM(teleophighballs)+SUM(teleophighfails)), 0) END) FROM queueingsview WHERE queueingsview.team=(SELECT blue1 FROM matchesview WHERE matchesview.number=?)', $m);?></text:p>
         <text:p text:style-name="P11">High #:<?php dp('SELECT ROUND(AVG(teleophighballs), 1) FROM queueingsview WHERE queueingsview.team=(SELECT blue1 FROM matchesview WHERE matchesview.number=?)', $m);?></text:p>
         <text:p text:style-name="P11">Low #:<?php dp('SELECT ROUND(AVG(teleoplowballs), 1) FROM queueingsview WHERE queueingsview.team=(SELECT blue1 FROM matchesview WHERE matchesview.number=?)', $m);?></text:p>
        </table:table-cell>
        <table:covered-table-cell/>
       </table:table-row>
       <table:table-row>
        <table:table-cell table:style-name="Table3.A2" office:value-type="string">
         <text:p text:style-name="P11">Aton Scr:<?php dp('SELECT COUNT(1) FROM queueingsview WHERE queueingsview.team=(SELECT blue1 FROM matchesview WHERE matchesview.number=?) AND autonomusball IN (\'lowcold\', \'lowhot\', \'highcold\', \'highhot\')', $m);?></text:p>
         <text:p text:style-name="P11">Aton Try:<?php dp('SELECT COUNT(1) FROM queueingsview WHERE queueingsview.team=(SELECT blue1 FROM matchesview WHERE matchesview.number=?) AND startedwithball', $m);?></text:p>
        </table:table-cell>
        <table:covered-table-cell/>
       </table:table-row>
       <table:table-row>
        <table:table-cell table:style-name="Table3.A2" office:value-type="string">
         <text:p text:style-name="P2"><text:span text:style-name="T5">Pass #:<?php dp('SELECT ROUND(AVG(passes), 1) FROM queueingsview WHERE queueingsview.team=(SELECT blue1 FROM matchesview WHERE matchesview.number=?)', $m);?></text:span></text:p>
         <text:p text:style-name="P11"><text:span text:style-name="T3">Catch #:<?php dp('SELECT ROUND(AVG(receves), 1) FROM queueingsview WHERE queueingsview.team=(SELECT blue1 FROM matchesview WHERE matchesview.number=?)', $m);?></text:span></text:p>
        </table:table-cell>
        <table:table-cell table:style-name="Table3.B2" office:value-type="string">
         <text:p text:style-name="P11">Truss P%:<?php dp('SELECT (CASE WHEN SUM(trusspasses)+SUM(trussfails)=0 THEN -99 ELSE ROUND(SUM(trusspasses)*100/(SUM(trusspasses)+SUM(trussfails)), 0) END) FROM queueingsview WHERE queueingsview.team=(SELECT blue1 FROM matchesview WHERE matchesview.number=?)', $m);?></text:p>
         <text:p text:style-name="P11">Truss C%:<?php dp('SELECT (CASE WHEN SUM(trussreceves)+SUM(trussdrops)=0 THEN -99 ELSE ROUND(SUM(trussreceves)*100/(SUM(trussreceves)+SUM(trussdrops)), 0) END) FROM queueingsview WHERE queueingsview.team=(SELECT blue1 FROM matchesview WHERE matchesview.number=?)', $m);?></text:p>
        </table:table-cell>
       </table:table-row>
       <table:table-row>
        <table:table-cell table:style-name="Table3.A2" office:value-type="string">
         <text:p text:style-name="P2">Avg FS:<?php dp('SELECT ROUND(AVG(COALESCE(nontechnicalfouls, 0)*-20+COALESCE(technicalfouls, 0)*-50), 0) FROM queueingsview WHERE queueingsview.team=(SELECT blue1 FROM matchesview WHERE matchesview.number=?)', $m);?></text:p>
        </table:table-cell>
        <table:table-cell table:style-name="Table3.B2" office:value-type="string">
         <text:p text:style-name="P11"><text:span text:style-name="T3">Deflected:<?php dp('SELECT ROUND(AVG(teleopdeflected+autonomusdeflected), 1) FROM queueingsview WHERE queueingsview.team=(SELECT blue1 FROM matchesview WHERE matchesview.number=?)', $m);?></text:span></text:p>
        </table:table-cell>
       </table:table-row>
      </table:table>
      <text:p text:style-name="P2"/>
     </table:table-cell>
     <table:table-cell table:style-name="Table1.A1" office:value-type="string">
      <table:table table:name="Table3" table:style-name="Table3">
       <table:table-column table:style-name="Table3.A" table:number-columns-repeated="2"/>
       <table:table-row>
        <table:table-cell table:style-name="Table3.A1" table:number-columns-spanned="2" office:value-type="string">
         <text:p text:style-name="P2">T-Name:<?php dp('SELECT name FROM teamsview WHERE teamsview.number=(SELECT blue2 FROM matchesview WHERE matchesview.number=?)', $m);?></text:p>
         <text:p text:style-name="P2">R-Name:<?php dp('SELECT robotname FROM teamsview WHERE teamsview.number=(SELECT blue2 FROM matchesview WHERE matchesview.number=?)', $m);?></text:p>
         <text:p text:style-name="P11">R-Type:<?php dp('SELECT type FROM teamsview WHERE teamsview.number=(SELECT blue2 FROM matchesview WHERE matchesview.number=?)', $m);?></text:p>
        </table:table-cell>
        <table:covered-table-cell/>
       </table:table-row>
       <table:table-row>
        <table:table-cell table:style-name="Table3.A2" office:value-type="string">
         <text:p text:style-name="P11">Avg Scr:<text:span text:style-name="T2"><?php dp('SELECT ROUND(averagesore, 0) FROM teamsview WHERE teamsview.number=(SELECT blue2 FROM matchesview WHERE matchesview.number=?)', $m);?></text:span></text:p>
         <text:p text:style-name="P11">Avg Def:<text:span text:style-name="T2">XXX</text:span></text:p>
        </table:table-cell>
        <table:table-cell table:style-name="Table3.B2" table:number-rows-spanned="3" office:value-type="string">
         <text:p text:style-name="P2"><draw:frame draw:style-name="fr1" draw:name="graphics2" text:anchor-type="paragraph" svg:width="1.3736in" svg:height="1.3736in" draw:z-index="0"><draw:image>
            <office:binary-data>
				<?php
					$imageid = db1('SELECT imageid FROM teamsview WHERE teamsview.number=(SELECT blue2 FROM matchesview WHERE matchesview.number=?)', $m)->imageid;
					echo base64_encode(file_get_contents(dirname(__FILE__) . '/../images/' . $imageid));
				?>
            </office:binary-data>
           </draw:image>
          </draw:frame>Team:<?php dp('SELECT blue2 FROM matchesview WHERE matchesview.number=?', $m);?></text:p>
        </table:table-cell>
       </table:table-row>
       <table:table-row>
        <table:table-cell table:style-name="Table3.A2" office:value-type="string">
         <text:p text:style-name="P11">High %:<?php dp('SELECT (CASE WHEN SUM(teleophighballs)+SUM(teleophighfails)=0 THEN -99 ELSE ROUND(SUM(teleophighballs)*100/(SUM(teleophighballs)+SUM(teleophighfails)), 0) END) FROM queueingsview WHERE queueingsview.team=(SELECT blue2 FROM matchesview WHERE matchesview.number=?)', $m);?></text:p>
         <text:p text:style-name="P11">High #:<?php dp('SELECT ROUND(AVG(teleophighballs), 1) FROM queueingsview WHERE queueingsview.team=(SELECT blue2 FROM matchesview WHERE matchesview.number=?)', $m);?></text:p>
         <text:p text:style-name="P11">Low #:<?php dp('SELECT ROUND(AVG(teleoplowballs), 1) FROM queueingsview WHERE queueingsview.team=(SELECT blue2 FROM matchesview WHERE matchesview.number=?)', $m);?></text:p>
        </table:table-cell>
        <table:covered-table-cell/>
       </table:table-row>
       <table:table-row>
        <table:table-cell table:style-name="Table3.A2" office:value-type="string">
         <text:p text:style-name="P11">Aton Scr:<?php dp('SELECT COUNT(1) FROM queueingsview WHERE queueingsview.team=(SELECT blue2 FROM matchesview WHERE matchesview.number=?) AND autonomusball IN (\'lowcold\', \'lowhot\', \'highcold\', \'highhot\')', $m);?></text:p>
         <text:p text:style-name="P11">Aton Try:<?php dp('SELECT COUNT(1) FROM queueingsview WHERE queueingsview.team=(SELECT blue2 FROM matchesview WHERE matchesview.number=?) AND startedwithball', $m);?></text:p>
        </table:table-cell>
        <table:covered-table-cell/>
       </table:table-row>
       <table:table-row>
        <table:table-cell table:style-name="Table3.A2" office:value-type="string">
         <text:p text:style-name="P2"><text:span text:style-name="T5">Pass #:<?php dp('SELECT ROUND(AVG(passes), 1) FROM queueingsview WHERE queueingsview.team=(SELECT blue2 FROM matchesview WHERE matchesview.number=?)', $m);?></text:span></text:p>
         <text:p text:style-name="P11"><text:span text:style-name="T3">Catch #:<?php dp('SELECT ROUND(AVG(receves), 1) FROM queueingsview WHERE queueingsview.team=(SELECT blue2 FROM matchesview WHERE matchesview.number=?)', $m);?></text:span></text:p>
        </table:table-cell>
        <table:table-cell table:style-name="Table3.B2" office:value-type="string">
         <text:p text:style-name="P11">Truss P%:<?php dp('SELECT (CASE WHEN SUM(trusspasses)+SUM(trussfails)=0 THEN -99 ELSE ROUND(SUM(trusspasses)*100/(SUM(trusspasses)+SUM(trussfails)), 0) END) FROM queueingsview WHERE queueingsview.team=(SELECT blue2 FROM matchesview WHERE matchesview.number=?)', $m);?></text:p>
         <text:p text:style-name="P11">Truss C%:<?php dp('SELECT (CASE WHEN SUM(trussreceves)+SUM(trussdrops)=0 THEN -99 ELSE ROUND(SUM(trussreceves)*100/(SUM(trussreceves)+SUM(trussdrops)), 0) END) FROM queueingsview WHERE queueingsview.team=(SELECT blue2 FROM matchesview WHERE matchesview.number=?)', $m);?></text:p>
        </table:table-cell>
       </table:table-row>
       <table:table-row>
        <table:table-cell table:style-name="Table3.A2" office:value-type="string">
         <text:p text:style-name="P2">Avg FS:<?php dp('SELECT ROUND(AVG(COALESCE(nontechnicalfouls, 0)*-20+COALESCE(technicalfouls, 0)*-50), 0) FROM queueingsview WHERE queueingsview.team=(SELECT blue2 FROM matchesview WHERE matchesview.number=?)', $m);?></text:p>
        </table:table-cell>
        <table:table-cell table:style-name="Table3.B2" office:value-type="string">
         <text:p text:style-name="P11"><text:span text:style-name="T3">Deflected:<?php dp('SELECT ROUND(AVG(teleopdeflected+autonomusdeflected), 1) FROM queueingsview WHERE queueingsview.team=(SELECT blue2 FROM matchesview WHERE matchesview.number=?)', $m);?></text:span></text:p>
        </table:table-cell>
       </table:table-row>
      </table:table>
      <text:p text:style-name="P2"/>
     </table:table-cell>
     <table:table-cell table:style-name="Table1.A1" office:value-type="string">
      <table:table table:name="Table3" table:style-name="Table3">
       <table:table-column table:style-name="Table3.A" table:number-columns-repeated="2"/>
       <table:table-row>
        <table:table-cell table:style-name="Table3.A1" table:number-columns-spanned="2" office:value-type="string">
         <text:p text:style-name="P2">T-Name:<?php dp('SELECT name FROM teamsview WHERE teamsview.number=(SELECT blue3 FROM matchesview WHERE matchesview.number=?)', $m);?></text:p>
         <text:p text:style-name="P2">R-Name:<?php dp('SELECT robotname FROM teamsview WHERE teamsview.number=(SELECT blue3 FROM matchesview WHERE matchesview.number=?)', $m);?></text:p>
         <text:p text:style-name="P11">R-Type:<?php dp('SELECT type FROM teamsview WHERE teamsview.number=(SELECT blue3 FROM matchesview WHERE matchesview.number=?)', $m);?></text:p>
        </table:table-cell>
        <table:covered-table-cell/>
       </table:table-row>
       <table:table-row>
        <table:table-cell table:style-name="Table3.A2" office:value-type="string">
         <text:p text:style-name="P11">Avg Scr:<text:span text:style-name="T2"><?php dp('SELECT ROUND(averagesore, 0) FROM teamsview WHERE teamsview.number=(SELECT blue3 FROM matchesview WHERE matchesview.number=?)', $m);?></text:span></text:p>
         <text:p text:style-name="P11">Avg Def:<text:span text:style-name="T2">XXX</text:span></text:p>
        </table:table-cell>
        <table:table-cell table:style-name="Table3.B2" table:number-rows-spanned="3" office:value-type="string">
         <text:p text:style-name="P2"><draw:frame draw:style-name="fr1" draw:name="graphics2" text:anchor-type="paragraph" svg:width="1.3736in" svg:height="1.3736in" draw:z-index="0"><draw:image>
            <office:binary-data>
				<?php
					$imageid = db1('SELECT imageid FROM teamsview WHERE teamsview.number=(SELECT blue3 FROM matchesview WHERE matchesview.number=?)', $m)->imageid;
					echo base64_encode(file_get_contents(dirname(__FILE__) . '/../images/' . $imageid));
				?>
            </office:binary-data>
           </draw:image>
          </draw:frame>Team:<?php dp('SELECT blue3 FROM matchesview WHERE matchesview.number=?', $m);?></text:p>
        </table:table-cell>
       </table:table-row>
       <table:table-row>
        <table:table-cell table:style-name="Table3.A2" office:value-type="string">
         <text:p text:style-name="P11">High %:<?php dp('SELECT (CASE WHEN SUM(teleophighballs)+SUM(teleophighfails)=0 THEN -99 ELSE ROUND(SUM(teleophighballs)*100/(SUM(teleophighballs)+SUM(teleophighfails)), 0) END) FROM queueingsview WHERE queueingsview.team=(SELECT blue3 FROM matchesview WHERE matchesview.number=?)', $m);?></text:p>
         <text:p text:style-name="P11">High #:<?php dp('SELECT ROUND(AVG(teleophighballs), 1) FROM queueingsview WHERE queueingsview.team=(SELECT blue3 FROM matchesview WHERE matchesview.number=?)', $m);?></text:p>
         <text:p text:style-name="P11">Low #:<?php dp('SELECT ROUND(AVG(teleoplowballs), 1) FROM queueingsview WHERE queueingsview.team=(SELECT blue3 FROM matchesview WHERE matchesview.number=?)', $m);?></text:p>
        </table:table-cell>
        <table:covered-table-cell/>
       </table:table-row>
       <table:table-row>
        <table:table-cell table:style-name="Table3.A2" office:value-type="string">
         <text:p text:style-name="P11">Aton Scr:<?php dp('SELECT COUNT(1) FROM queueingsview WHERE queueingsview.team=(SELECT blue3 FROM matchesview WHERE matchesview.number=?) AND autonomusball IN (\'lowcold\', \'lowhot\', \'highcold\', \'highhot\')', $m);?></text:p>
         <text:p text:style-name="P11">Aton Try:<?php dp('SELECT COUNT(1) FROM queueingsview WHERE queueingsview.team=(SELECT blue3 FROM matchesview WHERE matchesview.number=?) AND startedwithball', $m);?></text:p>
        </table:table-cell>
        <table:covered-table-cell/>
       </table:table-row>
       <table:table-row>
        <table:table-cell table:style-name="Table3.A2" office:value-type="string">
         <text:p text:style-name="P2"><text:span text:style-name="T5">Pass #:<?php dp('SELECT ROUND(AVG(passes), 1) FROM queueingsview WHERE queueingsview.team=(SELECT blue3 FROM matchesview WHERE matchesview.number=?)', $m);?></text:span></text:p>
         <text:p text:style-name="P11"><text:span text:style-name="T3">Catch #:<?php dp('SELECT ROUND(AVG(receves), 1) FROM queueingsview WHERE queueingsview.team=(SELECT blue3 FROM matchesview WHERE matchesview.number=?)', $m);?></text:span></text:p>
        </table:table-cell>
        <table:table-cell table:style-name="Table3.B2" office:value-type="string">
         <text:p text:style-name="P11">Truss P%:<?php dp('SELECT (CASE WHEN SUM(trusspasses)+SUM(trussfails)=0 THEN -99 ELSE ROUND(SUM(trusspasses)*100/(SUM(trusspasses)+SUM(trussfails)), 0) END) FROM queueingsview WHERE queueingsview.team=(SELECT blue3 FROM matchesview WHERE matchesview.number=?)', $m);?></text:p>
         <text:p text:style-name="P11">Truss C%:<?php dp('SELECT (CASE WHEN SUM(trussreceves)+SUM(trussdrops)=0 THEN -99 ELSE ROUND(SUM(trussreceves)*100/(SUM(trussreceves)+SUM(trussdrops)), 0) END) FROM queueingsview WHERE queueingsview.team=(SELECT blue3 FROM matchesview WHERE matchesview.number=?)', $m);?></text:p>
        </table:table-cell>
       </table:table-row>
       <table:table-row>
        <table:table-cell table:style-name="Table3.A2" office:value-type="string">
         <text:p text:style-name="P2">Avg FS:<?php dp('SELECT ROUND(AVG(COALESCE(nontechnicalfouls, 0)*-20+COALESCE(technicalfouls, 0)*-50), 0) FROM queueingsview WHERE queueingsview.team=(SELECT blue3 FROM matchesview WHERE matchesview.number=?)', $m);?></text:p>
        </table:table-cell>
        <table:table-cell table:style-name="Table3.B2" office:value-type="string">
         <text:p text:style-name="P11"><text:span text:style-name="T3">Deflected:<?php dp('SELECT ROUND(AVG(teleopdeflected+autonomusdeflected), 1) FROM queueingsview WHERE queueingsview.team=(SELECT blue3 FROM matchesview WHERE matchesview.number=?)', $m);?></text:span></text:p>
        </table:table-cell>
       </table:table-row>
      </table:table>
      <text:p text:style-name="P2"/>
     </table:table-cell>
    </table:table-row>
   </table:table>
   <text:p text:style-name="P1"/>
  </office:text>
 </office:body>
</office:document>
