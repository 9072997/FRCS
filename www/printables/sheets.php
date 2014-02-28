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
	header('Content-Disposition: attachment; filename="sheets.fodt"');
	
	$queueings = db('SELECT queueingsview.match, queueingsview.team, queueingsview.scout FROM queueingsview LEFT JOIN matchesview ON queueingsview.match=matchesview.number WHERE matchesview.starttime > current_timestamp');
?>
<<?php echo '?xml'; // this avoids short tag errors?> version="1.0" encoding="UTF-8"?>

<office:document xmlns:office="urn:oasis:names:tc:opendocument:xmlns:office:1.0" xmlns:style="urn:oasis:names:tc:opendocument:xmlns:style:1.0" xmlns:text="urn:oasis:names:tc:opendocument:xmlns:text:1.0" xmlns:table="urn:oasis:names:tc:opendocument:xmlns:table:1.0" xmlns:draw="urn:oasis:names:tc:opendocument:xmlns:drawing:1.0" xmlns:fo="urn:oasis:names:tc:opendocument:xmlns:xsl-fo-compatible:1.0" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:meta="urn:oasis:names:tc:opendocument:xmlns:meta:1.0" xmlns:number="urn:oasis:names:tc:opendocument:xmlns:datastyle:1.0" xmlns:svg="urn:oasis:names:tc:opendocument:xmlns:svg-compatible:1.0" xmlns:chart="urn:oasis:names:tc:opendocument:xmlns:chart:1.0" xmlns:dr3d="urn:oasis:names:tc:opendocument:xmlns:dr3d:1.0" xmlns:math="http://www.w3.org/1998/Math/MathML" xmlns:form="urn:oasis:names:tc:opendocument:xmlns:form:1.0" xmlns:script="urn:oasis:names:tc:opendocument:xmlns:script:1.0" xmlns:config="urn:oasis:names:tc:opendocument:xmlns:config:1.0" xmlns:ooo="http://openoffice.org/2004/office" xmlns:ooow="http://openoffice.org/2004/writer" xmlns:oooc="http://openoffice.org/2004/calc" xmlns:dom="http://www.w3.org/2001/xml-events" xmlns:xforms="http://www.w3.org/2002/xforms" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:rpt="http://openoffice.org/2005/report" xmlns:of="urn:oasis:names:tc:opendocument:xmlns:of:1.2" xmlns:xhtml="http://www.w3.org/1999/xhtml" xmlns:grddl="http://www.w3.org/2003/g/data-view#" xmlns:tableooo="http://openoffice.org/2009/table" xmlns:field="urn:openoffice:names:experimental:ooo-ms-interop:xmlns:field:1.0" xmlns:formx="urn:openoffice:names:experimental:ooxml-odf-interop:xmlns:form:1.0" xmlns:css3t="http://www.w3.org/TR/css3-text/" office:version="1.2" office:mimetype="application/vnd.oasis.opendocument.text">
 <office:meta><meta:creation-date>2014-02-26T08:36:16</meta:creation-date><dc:date>2014-02-26T15:14:50</dc:date><meta:editing-duration>PT19M13S</meta:editing-duration><meta:editing-cycles>14</meta:editing-cycles><meta:generator>LibreOffice/3.5$Linux_x86 LibreOffice_project/350m1$Build-2</meta:generator><meta:document-statistic meta:character-count="<?php echo 1462 * count($queueings); ?>" meta:image-count="0" meta:non-whitespace-character-count="<?php echo 943 * count($queueings); ?>" meta:object-count="0" meta:page-count="<?php count($queueings); ?>" meta:paragraph-count="<?php echo 73 * count($queueings); ?>" meta:table-count="<?php echo 3 * count($queueings); ?>" meta:word-count="<?php echo 588 * count($queueings); ?>"/></office:meta>
 <office:settings>
  <config:config-item-set config:name="ooo:view-settings">
   <config:config-item config:name="ViewAreaTop" config:type="int">0</config:config-item>
   <config:config-item config:name="ViewAreaLeft" config:type="int">0</config:config-item>
   <config:config-item config:name="ViewAreaWidth" config:type="int">32651</config:config-item>
   <config:config-item config:name="ViewAreaHeight" config:type="int">20348</config:config-item>
   <config:config-item config:name="ShowRedlineChanges" config:type="boolean">true</config:config-item>
   <config:config-item config:name="InBrowseMode" config:type="boolean">false</config:config-item>
   <config:config-item-map-indexed config:name="Views">
    <config:config-item-map-entry>
     <config:config-item config:name="ViewId" config:type="string">view2</config:config-item>
     <config:config-item config:name="ViewLeft" config:type="int">7532</config:config-item>
     <config:config-item config:name="ViewTop" config:type="int">3004</config:config-item>
     <config:config-item config:name="VisibleLeft" config:type="int">0</config:config-item>
     <config:config-item config:name="VisibleTop" config:type="int">0</config:config-item>
     <config:config-item config:name="VisibleRight" config:type="int">32650</config:config-item>
     <config:config-item config:name="VisibleBottom" config:type="int">20346</config:config-item>
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
   <config:config-item config:name="PrintEmptyPages" config:type="boolean">false</config:config-item>
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
   <ooo:libraries xmlns:ooo="http://openoffice.org/2004/office" xmlns:xlink="http://www.w3.org/1999/xlink"/>
  </office:script>
 </office:scripts>
 <office:font-face-decls>
  <style:font-face style:name="Liberation Serif1" svg:font-family="&apos;Liberation Serif&apos;" style:font-family-generic="roman"/>
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
  <style:style style:name="OLE" style:family="graphic">
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
   <style:table-properties style:width="7in" table:align="margins"/>
  </style:style>
  <style:style style:name="Table1.A" style:family="table-column">
   <style:table-column-properties style:column-width="2.3333in" style:rel-column-width="21845*"/>
  </style:style>
  <style:style style:name="Table1.A1" style:family="table-cell">
   <style:table-cell-properties fo:padding="0.0382in" fo:border="none"/>
  </style:style>
  <style:style style:name="Table1.A2" style:family="table-cell">
   <style:table-cell-properties fo:padding="0.0382in" fo:border-left="none" fo:border-right="none" fo:border-top="none" fo:border-bottom="0.05pt solid #000000"/>
  </style:style>
  <style:style style:name="Table2" style:family="table">
   <style:table-properties style:width="7in" table:align="margins"/>
  </style:style>
  <style:style style:name="Table2.A" style:family="table-column">
   <style:table-column-properties style:column-width="0.4889in" style:rel-column-width="4579*"/>
  </style:style>
  <style:style style:name="Table2.B" style:family="table-column">
   <style:table-column-properties style:column-width="0.5in" style:rel-column-width="4684*"/>
  </style:style>
  <style:style style:name="Table2.C" style:family="table-column">
   <style:table-column-properties style:column-width="0.4993in" style:rel-column-width="4677*"/>
  </style:style>
  <style:style style:name="Table2.E" style:family="table-column">
   <style:table-column-properties style:column-width="5.0118in" style:rel-column-width="46918*"/>
  </style:style>
  <style:style style:name="Table2.A1" style:family="table-cell">
   <style:table-cell-properties fo:padding="0.0382in" fo:border="none"/>
  </style:style>
  <style:style style:name="Table2.E1" style:family="table-cell">
   <style:table-cell-properties style:vertical-align="middle" fo:padding="0.0382in" fo:border="none"/>
  </style:style>
  <style:style style:name="Table5" style:family="table">
   <style:table-properties style:width="7in" table:align="margins"/>
  </style:style>
  <style:style style:name="Table5.A" style:family="table-column">
   <style:table-column-properties style:column-width="3.5in" style:rel-column-width="32767*"/>
  </style:style>
  <style:style style:name="Table5.B" style:family="table-column">
   <style:table-column-properties style:column-width="3.5in" style:rel-column-width="32768*"/>
  </style:style>
  <style:style style:name="Table5.A1" style:family="table-cell">
   <style:table-cell-properties fo:padding="0.0382in" fo:border-left="none" fo:border-right="none" fo:border-top="none" fo:border-bottom="0.05pt solid #000000"/>
  </style:style>
  <style:style style:name="Table5.A2" style:family="table-cell">
   <style:table-cell-properties fo:padding="0.0382in" fo:border="none"/>
  </style:style>
  <style:style style:name="P1" style:family="paragraph" style:parent-style-name="Table_20_Contents">
   <style:text-properties style:font-name="DejaVu Sans Mono" fo:font-size="20pt" style:font-size-asian="17.5pt" style:font-size-complex="20pt"/>
  </style:style>
  <style:style style:name="P2" style:family="paragraph" style:parent-style-name="Table_20_Contents">
   <style:paragraph-properties fo:text-align="center" style:justify-single-word="false"/>
   <style:text-properties style:font-name="DejaVu Sans Mono" fo:font-size="20pt" style:font-size-asian="17.5pt" style:font-size-complex="20pt"/>
  </style:style>
  <style:style style:name="P3" style:family="paragraph" style:parent-style-name="Table_20_Contents">
   <style:paragraph-properties fo:text-align="end" style:justify-single-word="false"/>
   <style:text-properties style:font-name="DejaVu Sans Mono" fo:font-size="20pt" style:font-size-asian="17.5pt" style:font-size-complex="20pt"/>
  </style:style>
  <style:style style:name="P4" style:family="paragraph" style:parent-style-name="Table_20_Contents">
   <style:paragraph-properties fo:text-align="end" style:justify-single-word="false"/>
   <style:text-properties style:font-name="DejaVu Sans Mono" fo:font-size="12pt" style:font-size-asian="12pt" style:font-size-complex="12pt"/>
  </style:style>
  <style:style style:name="P5" style:family="paragraph" style:parent-style-name="Table_20_Contents">
   <style:paragraph-properties fo:text-align="center" style:justify-single-word="false"/>
   <style:text-properties style:font-name="DejaVu Sans Mono" fo:font-size="12pt" style:font-size-asian="12pt" style:font-size-complex="12pt"/>
  </style:style>
  <style:style style:name="P6" style:family="paragraph" style:parent-style-name="Standard">
   <style:paragraph-properties fo:text-align="center" style:justify-single-word="false"/>
   <style:text-properties style:font-name="DejaVu Sans Mono" fo:font-size="14pt" style:font-size-asian="12.25pt" style:font-size-complex="14pt"/>
  </style:style>
  <style:style style:name="P7" style:family="paragraph" style:parent-style-name="Standard">
   <style:paragraph-properties fo:text-align="center" style:justify-single-word="false"/>
   <style:text-properties style:font-name="DejaVu Sans Mono" fo:font-size="14pt" style:font-name-asian="Liberation Serif1" style:font-size-asian="12.25pt" style:font-name-complex="Liberation Serif1" style:font-size-complex="14pt"/>
  </style:style>
  <style:style style:name="P8" style:family="paragraph" style:parent-style-name="Standard">
   <style:paragraph-properties fo:text-align="center" style:justify-single-word="false"/>
   <style:text-properties style:font-name="DejaVu Sans Mono" fo:font-size="12pt" style:font-size-asian="12pt" style:font-size-complex="12pt"/>
  </style:style>
  <style:style style:name="P9" style:family="paragraph" style:parent-style-name="Standard">
   <style:paragraph-properties fo:text-align="center" style:justify-single-word="false"/>
   <style:text-properties style:font-name="DejaVu Sans Mono" fo:font-size="12pt" fo:font-weight="bold" style:font-size-asian="12pt" style:font-weight-asian="bold" style:font-size-complex="12pt" style:font-weight-complex="bold"/>
  </style:style>
  <style:style style:name="P10" style:family="paragraph" style:parent-style-name="Standard">
   <style:paragraph-properties fo:text-align="center" style:justify-single-word="false"/>
   <style:text-properties style:font-name="DejaVu Sans Mono" fo:font-size="12pt" fo:font-weight="bold" style:font-name-asian="Liberation Serif1" style:font-size-asian="12pt" style:font-weight-asian="bold" style:font-name-complex="Liberation Serif1" style:font-size-complex="12pt" style:font-weight-complex="bold"/>
  </style:style>
  <style:style style:name="P11" style:family="paragraph" style:parent-style-name="Standard">
   <style:text-properties style:font-name="DejaVu Sans Mono" fo:font-size="12pt" style:font-name-asian="Liberation Serif1" style:font-size-asian="12pt" style:font-name-complex="Liberation Serif1" style:font-size-complex="12pt"/>
  </style:style>
  <style:style style:name="P12" style:family="paragraph" style:parent-style-name="Standard">
   <style:paragraph-properties fo:text-align="center" style:justify-single-word="false"/>
   <style:text-properties style:font-name="DejaVu Sans Mono" fo:font-size="12pt" style:font-name-asian="Liberation Serif1" style:font-size-asian="12pt" style:font-name-complex="Liberation Serif1" style:font-size-complex="12pt"/>
  </style:style>
  <style:style style:name="P13" style:family="paragraph" style:parent-style-name="Standard">
   <style:paragraph-properties fo:text-align="start" style:justify-single-word="false"/>
   <style:text-properties style:font-name="DejaVu Sans Mono" fo:font-size="12pt" style:font-name-asian="Liberation Serif1" style:font-size-asian="12pt" style:font-name-complex="Liberation Serif1" style:font-size-complex="12pt"/>
  </style:style>
  <style:style style:name="T1" style:family="text">
   <style:text-properties fo:background-color="#e6e6e6"/>
  </style:style>
  <style:page-layout style:name="pm1">
   <style:page-layout-properties fo:page-width="8.5in" fo:page-height="11in" style:num-format="1" style:print-orientation="portrait" fo:margin="0.75in" fo:margin-top="0.75in" fo:margin-bottom="0.75in" fo:margin-left="0.75in" fo:margin-right="0.75in" style:writing-mode="lr-tb" style:footnote-max-height="0in">
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
<?php
	foreach($queueings as $queueing) {
?>
   <text:sequence-decls>
    <text:sequence-decl text:display-outline-level="0" text:name="Illustration"/>
    <text:sequence-decl text:display-outline-level="0" text:name="Table"/>
    <text:sequence-decl text:display-outline-level="0" text:name="Text"/>
    <text:sequence-decl text:display-outline-level="0" text:name="Drawing"/>
   </text:sequence-decls>
   <table:table table:name="Table1" table:style-name="Table1">
    <table:table-column table:style-name="Table1.A" table:number-columns-repeated="3"/>
    <table:table-row>
     <table:table-cell table:style-name="Table1.A1" office:value-type="string">
      <text:p text:style-name="P1">Match: <text:span text:style-name="T1"><text:s/><?php echo strlen($queueing->match) ? $queueing->match : '______'; ?> </text:span></text:p>
     </table:table-cell>
     <table:table-cell table:style-name="Table1.A1" office:value-type="string">
      <text:p text:style-name="P2">Team: <text:span text:style-name="T1"><text:s/><?php echo strlen($queueing->team) ? $queueing->team : '______'; ?> </text:span></text:p>
     </table:table-cell>
     <table:table-cell table:style-name="Table1.A1" office:value-type="string">
      <text:p text:style-name="P3">Scout: <text:span text:style-name="T1"><?php echo (strlen($queueing->scout) > 6) ? substr($queueing->scout, 0, 6) : (strlen($queueing->scout) ? $queueing->scout : '______'); ?></text:span></text:p>
     </table:table-cell>
    </table:table-row>
    <table:table-row>
     <table:table-cell table:style-name="Table1.A2" table:number-columns-spanned="3" office:value-type="string">
      <text:p text:style-name="P10">Autonomous</text:p>
     </table:table-cell>
     <table:covered-table-cell/>
     <table:covered-table-cell/>
    </table:table-row>
   </table:table>
   <text:p text:style-name="P11">□ robot moved to earn 5 points in autonomous</text:p>
   <text:p text:style-name="P11">□ robot started the match with the ball</text:p>
   <table:table table:name="Table2" table:style-name="Table2">
    <table:table-column table:style-name="Table2.A"/>
    <table:table-column table:style-name="Table2.B"/>
    <table:table-column table:style-name="Table2.C" table:number-columns-repeated="2"/>
    <table:table-column table:style-name="Table2.E"/>
    <table:table-row>
     <table:table-cell table:style-name="Table2.A1" office:value-type="string">
      <text:p text:style-name="P4"/>
     </table:table-cell>
     <table:table-cell table:style-name="Table2.A1" office:value-type="string">
      <text:p text:style-name="P5">cold</text:p>
     </table:table-cell>
     <table:table-cell table:style-name="Table2.A1" office:value-type="string">
      <text:p text:style-name="P5">hot</text:p>
     </table:table-cell>
     <table:table-cell table:style-name="Table2.A1" office:value-type="string">
      <text:p text:style-name="P5">none</text:p>
     </table:table-cell>
     <table:table-cell table:style-name="Table2.E1" table:number-rows-spanned="3" office:value-type="string">
      <text:p text:style-name="P12">balls deflected in autonomous</text:p>
      <text:p text:style-name="P12">□ □ □ □ □ □ □ □ □ □ □ □ □ □ □ □</text:p>
      <text:p text:style-name="P12">□ □ □ □ □ □ □ □ □ □ □ □ □ □ □ □</text:p>
      <text:p text:style-name="P12">Total: ___</text:p>
     </table:table-cell>
    </table:table-row>
    <table:table-row>
     <table:table-cell table:style-name="Table2.A1" office:value-type="string">
      <text:p text:style-name="P4">high</text:p>
     </table:table-cell>
     <table:table-cell table:style-name="Table2.A1" office:value-type="string">
      <text:p text:style-name="P7">□</text:p>
     </table:table-cell>
     <table:table-cell table:style-name="Table2.A1" office:value-type="string">
      <text:p text:style-name="P7">□</text:p>
     </table:table-cell>
     <table:table-cell table:style-name="Table2.A1" office:value-type="string">
      <text:p text:style-name="P7">□</text:p>
     </table:table-cell>
     <table:covered-table-cell/>
    </table:table-row>
    <table:table-row>
     <table:table-cell table:style-name="Table2.A1" office:value-type="string">
      <text:p text:style-name="P4">low</text:p>
     </table:table-cell>
     <table:table-cell table:style-name="Table2.A1" office:value-type="string">
      <text:p text:style-name="P7">□</text:p>
     </table:table-cell>
     <table:table-cell table:style-name="Table2.A1" office:value-type="string">
      <text:p text:style-name="P7">□</text:p>
     </table:table-cell>
     <table:table-cell table:style-name="Table2.A1" office:value-type="string">
      <text:p text:style-name="P6"/>
     </table:table-cell>
     <table:covered-table-cell/>
    </table:table-row>
   </table:table>
   <table:table table:name="Table5" table:style-name="Table5">
    <table:table-column table:style-name="Table5.A"/>
    <table:table-column table:style-name="Table5.B"/>
    <table:table-row>
     <table:table-cell table:style-name="Table5.A1" table:number-columns-spanned="2" office:value-type="string">
      <text:p text:style-name="P10">Teleop</text:p>
     </table:table-cell>
     <table:covered-table-cell/>
    </table:table-row>
    <table:table-row>
     <table:table-cell table:style-name="Table5.A2" office:value-type="string">
      <text:p text:style-name="P12">successful high goals</text:p>
      <text:p text:style-name="P12">□ □ □ □ □ □ □ □ □ □ □ □ □ □ □ □</text:p>
      <text:p text:style-name="P12">□ □ □ □ □ □ □ □ □ □ □ □ □ □ □ □</text:p>
      <text:p text:style-name="P12">□ □ □ □ □ □ □ □ □ □ □ □ □ □ □ □</text:p>
      <text:p text:style-name="P12">Total: ___</text:p>
     </table:table-cell>
     <table:table-cell table:style-name="Table5.A2" office:value-type="string">
      <text:p text:style-name="P12">truss to ground</text:p>
      <text:p text:style-name="P12">□ □ □ □ □ □ □ □ □ □ □ □ □ □ □ □</text:p>
      <text:p text:style-name="P12">□ □ □ □ □ □ □ □ □ □ □ □ □ □ □ □</text:p>
      <text:p text:style-name="P12">□ □ □ □ □ □ □ □ □ □ □ □ □ □ □ □</text:p>
      <text:p text:style-name="P12">Total: ___</text:p>
     </table:table-cell>
    </table:table-row>
    <table:table-row>
     <table:table-cell table:style-name="Table5.A2" office:value-type="string">
      <text:p text:style-name="P12"/>
      <text:p text:style-name="P12">failed high goal attempts</text:p>
      <text:p text:style-name="P12">□ □ □ □ □ □ □ □ □ □ □ □ □ □ □ □</text:p>
      <text:p text:style-name="P12">□ □ □ □ □ □ □ □ □ □ □ □ □ □ □ □</text:p>
      <text:p text:style-name="P12">□ □ □ □ □ □ □ □ □ □ □ □ □ □ □ □</text:p>
      <text:p text:style-name="P12">Total: ___</text:p>
     </table:table-cell>
     <table:table-cell table:style-name="Table5.A2" office:value-type="string">
      <text:p text:style-name="P12"/>
      <text:p text:style-name="P12">truss to alliance</text:p>
      <text:p text:style-name="P12">□ □ □ □ □ □ □ □ □ □ □ □ □ □ □ □</text:p>
      <text:p text:style-name="P12">□ □ □ □ □ □ □ □ □ □ □ □ □ □ □ □</text:p>
      <text:p text:style-name="P12">□ □ □ □ □ □ □ □ □ □ □ □ □ □ □ □</text:p>
      <text:p text:style-name="P12">Total: ___</text:p>
     </table:table-cell>
    </table:table-row>
    <table:table-row>
     <table:table-cell table:style-name="Table5.A2" office:value-type="string">
      <text:p text:style-name="P12"/>
      <text:p text:style-name="P12">successful low goals</text:p>
      <text:p text:style-name="P12">□ □ □ □ □ □ □ □ □ □ □ □ □ □ □ □</text:p>
      <text:p text:style-name="P12">□ □ □ □ □ □ □ □ □ □ □ □ □ □ □ □</text:p>
      <text:p text:style-name="P12">□ □ □ □ □ □ □ □ □ □ □ □ □ □ □ □</text:p>
      <text:p text:style-name="P12">Total: ___</text:p>
     </table:table-cell>
     <table:table-cell table:style-name="Table5.A2" office:value-type="string">
      <text:p text:style-name="P12"/>
      <text:p text:style-name="P12">passes</text:p>
      <text:p text:style-name="P12">□ □ □ □ □ □ □ □ □ □ □ □ □ □ □ □</text:p>
      <text:p text:style-name="P12">□ □ □ □ □ □ □ □ □ □ □ □ □ □ □ □</text:p>
      <text:p text:style-name="P12">□ □ □ □ □ □ □ □ □ □ □ □ □ □ □ □</text:p>
      <text:p text:style-name="P12">Total: ___</text:p>
     </table:table-cell>
    </table:table-row>
    <table:table-row>
     <table:table-cell table:style-name="Table5.A2" office:value-type="string">
      <text:p text:style-name="P12"/>
      <text:p text:style-name="P12">failed truss throws</text:p>
      <text:p text:style-name="P12">□ □ □ □ □ □ □ □ □ □ □ □ □ □ □ □</text:p>
      <text:p text:style-name="P12">□ □ □ □ □ □ □ □ □ □ □ □ □ □ □ □</text:p>
      <text:p text:style-name="P12">□ □ □ □ □ □ □ □ □ □ □ □ □ □ □ □</text:p>
      <text:p text:style-name="P12">Total: ___</text:p>
     </table:table-cell>
     <table:table-cell table:style-name="Table5.A2" office:value-type="string">
      <text:p text:style-name="P12"/>
      <text:p text:style-name="P12">received passes</text:p>
      <text:p text:style-name="P12">□ □ □ □ □ □ □ □ □ □ □ □ □ □ □ □</text:p>
      <text:p text:style-name="P12">□ □ □ □ □ □ □ □ □ □ □ □ □ □ □ □</text:p>
      <text:p text:style-name="P12">□ □ □ □ □ □ □ □ □ □ □ □ □ □ □ □</text:p>
      <text:p text:style-name="P12">Total: ___</text:p>
     </table:table-cell>
    </table:table-row>
    <table:table-row>
     <table:table-cell table:style-name="Table5.A2" table:number-columns-spanned="2" office:value-type="string">
      <text:p text:style-name="P12"/>
      <text:p text:style-name="P12">deflected balls</text:p>
      <text:p text:style-name="P12">□ □ □ □ □ □ □ □ □ □ □ □ □ □ □ □</text:p>
      <text:p text:style-name="P12">□ □ □ □ □ □ □ □ □ □ □ □ □ □ □ □</text:p>
      <text:p text:style-name="P12">□ □ □ □ □ □ □ □ □ □ □ □ □ □ □ □</text:p>
      <text:p text:style-name="P12">Total: ___</text:p>
     </table:table-cell>
     <table:covered-table-cell/>
    </table:table-row>
    <table:table-row>
     <table:table-cell table:style-name="Table5.A1" table:number-columns-spanned="2" office:value-type="string">
      <text:p text:style-name="P9">Fouls</text:p>
     </table:table-cell>
     <table:covered-table-cell/>
    </table:table-row>
    <table:table-row>
     <table:table-cell table:style-name="Table5.A2" office:value-type="string">
      <text:p text:style-name="P8">technical fouls</text:p>
      <text:p text:style-name="P12">□ □ □ □ □ □ □ □ □ □ □ □ □ □ □ □</text:p>
      <text:p text:style-name="P12">Total: ___</text:p>
     </table:table-cell>
     <table:table-cell table:style-name="Table5.A2" office:value-type="string">
      <text:p text:style-name="P8">non-technical fouls</text:p>
      <text:p text:style-name="P12">□ □ □ □ □ □ □ □ □ □ □ □ □ □ □ □</text:p>
      <text:p text:style-name="P12">Total: ___</text:p>
     </table:table-cell>
    </table:table-row>
   </table:table>
   <text:p text:style-name="P13"/>
<?php
	}
?>
  </office:text>
 </office:body>
</office:document>
