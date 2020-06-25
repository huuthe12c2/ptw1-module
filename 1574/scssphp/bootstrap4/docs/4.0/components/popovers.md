��่องเสียง MIDI (แนะนำ)อนุญาตให้เข้าถึงอุปกรณ์เครื่องเสียง MIDI ของคุณไม่อนุญาตให้เข้าถึงอุปกรณ์เครื่องเสียง MIDI ของคุณไซต์นี้กำลังพยายามดาวน์โหลดไฟล์หลายไฟล์ คุณต้องการอนุญาตให้มีการทำเช่นนี้หรือไม่ดาวน์โหลดไฟล์หลายไฟล์ไม่สามารถอัปเดตส่วนขยายของคุณได้บางส่วน เปิดตัวจัดการส่วนขยายเพื่อดูว่าเป็นส่วนขยายใดบ้าง ระบบจะอัปเดตส่วนขยายเหล่านี้โดยเร็วเมื่อมีเวอร์ชันที่ทำงานเข้ากันได้ติดตั้งส่วนขยายไม่สำเร็จการอัปเกรดส่วนขยายต้องการสิทธิ์เพิ่มเติม โปรดไปที่ตัวจัดการส่วนขยายเพื่อยอมรับการอัปเกรดระบบปิดใช้ส่วนขยายนี้ไว้เนื่องจากส่วนขยายดังกล่าวมาจากแหล่งที่ไม่รู้จัก โปรดไปที่ตัวจัดการส่วนขยายเพื่อเปิดใช้ส่วนขยายดังกล่าวระบบได้ปิดใช้ส่วนขยายของคุณไว้ โปรดไปที่ตัวจัดการส่วนขยายเพื่อดูรายละเอียดเพิ่มเติมระบบได้ปิดใช้ส่วนขยายของคุณไว้เนื่องจากไดรับความเสียหาย โปรดไปที่ตัวจัดการส่วนขยายเพื่อซ่อมแซมOpera ตรวจพบการเปลี่ยนแปลงที่ไม่คาดคิดต่อส่วนขยายของคุณ ส่วนขยายทั้งหมดถูกปิดการใช้งานในฐานะเป็นข้อควรระวังมีบางสิ่งบางอย่างผิดปกติเมื่อติดตั้งส่วนขยายไปที่ส่วนขยายทบทวนส่วนขยายเข้าถึงข้อมูลของคุณบนทุกเว็บไซต์อ่านข้อมูลของคุณทั้งหมดในเว็บไซต์ที่คุณเยี่ยมชมตรวจหาตำแหน่งที่ตั้งทางกายภาพของคุณจัดการส่วนขยายของคุณค้นพบอุปกรณ์บนเครือข่ายเฉพาะที่ของคุณกำหนดค่าการเชื่อมต่อเครือข่ายจัดการการเชื่อมต่อเครือข่ายจัดการการตั้งค่าที่เกี่ยวข้องกับอ่านรายการอุปกรณ์ที่ลงชื่อเข้าใช้แล้วสื่อสารกับแอปพลิเคชันดั้งเดิมที่ทำงานร่วมกันตรวจติดตามพฤติกรรมของส่วนขยายอื่นๆ รวมทั้ง URL ที่เยี่ยมชมถ่ายภาพเนื้อหาหน้าจอของค�="bottom" data-content="Vivamus
sagittis lacus vel augue laoreet rutrum faucibus.">
  Popover on bottom
</button>

<button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
  Popover on left
</button>
{% endhighlight %}

### Dismiss on next click

Use the `focus` trigger to dismiss popovers on the user's next click of a different element than the toggle element.

{% callout danger %}
#### Specific markup required for dismiss-on-next-click

For proper cross-browser and cross-platform behavior, you must use the `<a>` tag, _not_ the `<button>` tag, and you also must include a [`tabindex`](https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes/tabindex) attribute.
{% endcallout %}

{% example html %}
<a tabindex="0" class="btn btn-lg btn-danger" role="button" data-toggle="popover" data-trigger="focus" title="Dismissible popover" data-content="And here's some amazing content. It's very engaging. Right?">Dismissible popover</a>
{% endexample %}

{% highlight js %}
$('.popover-dismiss').popover({
  trigger: 'focus'
})
{% endhighlight %}

### Disabled elements

Elements with the `disabled` attribute aren't interactive, meaning users cannot hover or click them to trigger a popover (or tooltip). As a workaround, you'll want to trigger the popover from a wrapper `<div>` or `<span>` and override the `pointer-events` on the disabled element.

For disabled popover triggers, you may also prefer `data-trigger="hover"` so that the popover appears as immediate visual feedback to your users as they may not expect to _click_ on a disabled element.

{% example html %}
<span class="d-inline-block" data-toggle="popover" data-content="Disabled popover">
  <button class="btn btn-primary" style="pointer-events: none;" type="button" disabled>Disabled button</button>
</span>
{% endexample %}

## Usage

Enable popovers via JavaScript:

{% highlight js %}$('#example').popover(options){% endhighlight %}

### Options

Options can be passed via data attributes or JavaScript. For data attributes, append the option name to `data-`, as in `data-animation=""`.

<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th style="width: 100px;">Name</th>
      <th style="width: 100px;">Type</th>
      <th style="width: 50px;">Default</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>animation</td>
      <td>boolean</td>
      <td>true</td>
      <td>Apply a CSS fade transition to the popover</td>
    </tr>
    <tr>
      <td>container</td>
      <td>string | element | false</td>
      <td>false</td>
      <td>
        <p>Appends the popover to a specific element. Example: <code>container: 'body'</code>. This option is particularly useful in that it allows you to position the popover in the flow of the document near the triggering element - which will prevent the popover from floating away from the triggering element during a window resize.</p>
      </td>
    </tr>
    <tr>
      <td>content</td>
      <td>string | element | function</td>
      <td>''</td>
      <td>
        <p>Default content value if <code>data-content</code> attribute isn't present.</p>
        <p>If a function is given, it will be called with its <code>this</code> reference set to the element that the popover is attached to.</p>
      </td>
    </tr>
    <tr>
      <td>delay</td>
      <td>number | object</td>
      <td>0</td>
      <td>
        <p>Delay showing and hiding the popover (ms) - does not apply to manual trigger type</p>
        <p>If a number is supplied, delay is applied to both hide/show</p>
        <p>Object structure is: <code>delay: { "show": 500, "hide": 100 }</code></p>
      </td>
    </tr>
    <tr>
      <td>html</td>
      <td>boolean</td>
      <td>false</td>
      <td>Insert HTML into the popover. If false, jQuery's <code>text</code> method will be used to insert content into the DOM. Use text if you're worried about XSS attacks.</td>
    </tr>
    <tr>
      <td>placement</td>
      <td>string | function</td>
      <td>'right'</td>
      <td>
        <p>How to position the popover - auto | top | bottom | left | right.<br>When <code>auto</code> is specified, it will dynamically reorient the popover.</p>
        <p>When a function is used to determine the placement, it is called with the popover DOM node as its first argument and the triggering element DOM node as its second. The <code>this</code> context is set to the popover instance.</p>
      </td>
    </tr>
    <tr>
      <td>selector</td>
      <td>string | false</td>
      <td>false</td>
      <td>If a selector is provided, popover objects will be delegated to the specified targets. In practice, this is used to enable dynamic HTML content to have popovers added. See <a href="https://github.com/twbs/bootstrap/issues/4215">this</a> and <a href="https://jsbin.com/zopod/1/edit">an informative example</a>.</td>
    </tr>
    <tr>
      <td>template</td>
      <td>string</td>
      <td><code>'&lt;div class="popover" role="tooltip"&gt;&lt;div class="arrow"&gt;&lt;/div&gt;&lt;h3 class="popover-header"&gt;&lt;/h3&gt;&lt;div class="popover-body"&gt;&lt;/div&gt;&lt;/div&gt;'</code></td>
      <td>
        <p>Base HTML to use when creating the popover.</p>
        <p>The popover's <code>title</code> will be injected into the <code>.popover-header</code>.</p>
        <p>The popover's <code>content</code> will be injected into the <code>.popover-body</code>.</p>
        <p><code>.arrow</code> will become the popover's arrow.</p>
        <p>The outermost wrapper element should have the <code>.popover</code> class.</p>
      </td>
    </tr>
    <tr>
      <td>title</td>
      <td>string | element | function</td>
      <td>''</td>
      <td>
        <p>Default title value if <code>title</code> attribute isn't present.</p>
        <p>If a function is given, it will be called with its <code>this</code> reference set to the element that the popover is attached to.</p>
      </td>
    </tr>
    <tr>
      <td>trigger</td>
      <td>string</td>
      <td>'click'</td>
      <td>How popover is triggered - click | hover | focus | manual. You may pass multiple triggers; separate them with a space. `manual` cannot be combined with any other trigger.</td>
    </tr>
    <tr>
      <td>offset</td>
      <td>number | string</td>
      <td>0</td>
      <td>Offset of the popover relative to its target. For more information refer to Popper.js's <a href="https://popper.js.org/popper-documentation.html#modifiers..offset.offset">offset docs</a>.</td>
    </tr>
    <tr>
      <td>fallbackPlacement</td>
      <td>string | array</td>
      <td>'flip'</td>
      <td>Allow to specify which position Popper will use on fallback. For more information refer to
      Popper.js's <a href="https://popper.js.org/popper-documentation.html#modifiers..flip.behavior">behavior docs</a></td>
    </tr>
    <tr>
      <td>boundary</td>
      <td>string | element</td>
      <td>'scrollParent'</td>
      <td>Overflow constraint boundary of the popover. Accepts the values of <code>'viewport'</code>, <code>'window'</code>, <code>'scrollParent'</code>, or an HTMLElement reference (JavaScript only). For more information refer to Popper.js's <a href="https://popper.js.org/popper-documentation.html#modifiers..preventOverflow.boundariesElement">preventOverflow docs</a>.</td>
    </tr>
  </tbody>
</table>

{% callout info %}
#### Data attributes for individual popovers

Options for individual popovers can alternatively be specified through the use of data attributes, as explained above.
{% endcallout %}

### Methods

{% capture callout-include %}{% include callout-danger-async-methods.md %}{% endcapture %}
{{ callout-include | markdownify }}

#### `$().popover(options)`

Initializes popovers for an element collection.

#### `.popover('show')`

Reveals an element's popover. **Returns to the caller before the popover has actually been shown** (i.e. before the `shown.bs.popover` event occurs). This is considered a "manual" triggering of the popover. Popovers whose both title and content are zero-length are never displayed.

{% highlight js %}$('#element').popover('show'){% endhighlight %}

#### `.popover('hide')`

Hides an element's popover. **Returns to the caller before the popover has actually been hidden** (i.e. before the `hidden.bs.popover` event occurs). This is considered a "manual" triggering of the popover.

{% highlight js %}$('#element').popover('hide'){% endhighlight %}

#### `.popover('toggle')`

Toggles an element's popover. **Returns to the caller before the popover has actually been shown or hidden** (i.e. before the `shown.bs.popover` or `hidden.bs.popover` event occurs). This is considered a "manual" triggering of the popover.

{% highlight js %}$('#element').popover('toggle'){% endhighlight %}

#### `.popover('dispose')`

Hides and destroys an element's popover. Popovers that use delegation (which are created using [the `selector` option](#options)) cannot be individually destroyed on descendant trigger elements.

{% highlight js %}$('#element').popover('dispose'){% endhighlight %}

#### `.popover('enable')`

Gives an element's popover the ability to be shown. **Popovers are enabled by default.**

{% highlight js %}$('#element').popover('enable'){% endhighlight %}

#### `.popover('disable')`

Removes the ability for an element's popover to be shown. The popover will only be able to be shown if it is re-enabled.

{% highlight js %}$('#element').popover('disable'){% endhighlight %}

#### `.popover('toggleEnabled')`

Toggles the ability for an element's popover to be shown or hidden.

{% highlight js %}$('#element').popover('toggleEnabled'){% endhighlight %}

#### `.popover('update')`

Updates the position of an element's popover.

{% highlight js %}$('#element').popover('update'){% endhighlight %}

### Events

<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th style="width: 150px;">Event Type</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>show.bs.popover</td>
      <td>This event fires immediately when the <code>show</code> instance method is called.</td>
    </tr>
    <tr>
      <td>shown.bs.popover</td>
      <td>This event is fired when the popover has been made visible to the user (will wait for CSS transitions to complete).</td>
    </tr>
    <tr>
      <td>hide.bs.popover</td>
      <td>This event is fired immediately when the <code>hide</code> instance method has been called.</td>
    </tr>
    <tr>
      <td>hidden.bs.popover</td>
      <td>This event is fired when the popover has finished being hidden from the user (will wait for CSS transitions to complete).</td>
    </tr>
    <tr>
      <td>inserted.bs.popover</td>
      <td>This event is fired after the <code>show.bs.popover</code> event when the popover template has been added to the DOM.</td>
    </tr>
  </tbody>
</table>

{% highlight js %}
$('#myPopover').on('hidden.bs.popover', function () {
  // do something…
})
{% endhighlight %}
