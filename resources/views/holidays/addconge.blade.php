<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Add Holiday Request - إضافة طلب عطلة</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background-color: #f8f9fa;
    }
    .header-bg {
      background-image: url('{{ asset("assets/img/header-blue-purple.jpg") }}');
      background-position: center;
      background-size: cover;
      height: 150px;
      margin-bottom: 0px;
      border-radius: 0.5rem;
    }
    .card {
      max-width: 900px;
      margin: auto;
      border-radius: 1rem;
    }
    .step-section {
      display: none;
      padding: 20px;
      background: #fff;
      border-radius: 0.5rem;
    }
    .step-section.active {
      display: block;
    }
    .step-buttons {
      margin-top: 25px;
    }
    .progress {
      height: 20px;
      margin-bottom: 25px;
    }
    .progress-bar {
      font-weight: bold;
    }
  </style>
</head>
<body>

<div class="header-bg"></div>

<div class="container py-2">
  <div class="card shadow-lg p-4">
    <div class="progress">
      <div class="progress-bar bg-primary" role="progressbar" style="width: 25%; " id="progress-bar"></div> 
    </div>

    <form action="{{ route('holidays.store') }}" method="POST">
      @csrf

    <!-- Section 1--------for the user  -->
<div class="step-section active" id="step1">
  <h4 class="text-secondary mb-3">Holiday Info - معلومات العطلة</h4>
  <div class="row g-3">
    <div class="col-md-6">
      <label class="form-label">Identification Number - رقم التعريف</label>
      <input type="text" name="identification_number" class="form-control" required>
    </div>
    <div class="col-md-6">
      <label class="form-label">Type - نوع العطلة</label>
      <select name="holiday_type" class="form-control" required>
        <option value="">-- Select vacation type - نوع العطلة --</option>
        <option value="annual">Annual leave - عطلة سنوية</option>
        <option value="sick">Sick leave - عطلة مرضية</option>
        <option value="exceptional">Exceptional leave - عطلة استثنائية</option>
        <option value="unpaid">Unpaid leave - عطلة بدون أجر</option>
        <option value="maternity">Maternity leave - عطلة أمومة</option>
        <option value="paternity">Paternity leave - عطلة أبوة</option>
        <option value="marriage">Marriage leave - عطلة زواج</option>
        <option value="bereavement">Bereavement leave - عطلة وفاة</option>
        <option value="hajj">Hajj leave - عطلة حج</option>
        <option value="administrative">Administrative leave - عطلة إدارية</option>
      </select>
    </div>
    <div class="col-md-3">
      <label class="form-label">Start Date - تاريخ البداية</label>
      <input type="date" name="start_date" class="form-control" required>
    </div>
    <div class="col-md-3">
      <label class="form-label">End Date - تاريخ النهاية</label>
      <input type="date" name="end_date" class="form-control" required>
    </div>
    <div class="col-md-4">
      <label class="form-label">Days Number - عدد الأيام</label>
      <input type="number" name="days_number" class="form-control" min="1" required>
    </div>
    <div class="col-md-4">
      <label class="form-label">Call Number - رقم الاتصال</label>
      <input type="text" name="call_number" class="form-control">
    </div>
    
    <div class="form-check mt-4">
      <input class="form-check-input" type="checkbox" name="user_trust_data_user" value="1">
      <label class="form-check-label">User Trust Data - بيانات موثوقة من المستخدم</label>
    </div>
  </div>
  <div class="step-buttons text-end">
    <button type="button" class="btn btn-secondary next">Next </button>
  </div>
</div>

<!-- Section 2------- for the administration -->
<div class="step-section" id="step2">
  <h4 class="text-secondary mb-3">Replacer & Admin Approvals - الموافقات من البديل والسلم الإداري</h4>
  <div class="row g-3">
    <div class="col-md-6">
      <label class="form-label">Managerial Review - رأي السلم الإداري</label>
      <textarea name="managerial_review" class="form-control"></textarea>
    </div>
    <div class="col-md-6">
      <label class="form-label">Replacer - المعوض</label>
      <select name="replacer_id" class="form-control">
        <option value="">-- Select User --</option>
        @foreach($users as $u)
          <option value="{{ $u->id }}" {{ old('replacer_id', $user->replacer_id ?? '') == $u->id ? 'selected' : '' }}>
            {{ $u->name }}
          </option>
        @endforeach
      </select>
    </div>
    <div class="form-check mt-4">
      <input class="form-check-input" type="checkbox" name="admin_trust_data" value="1">
      <label class="form-check-label">Admin Trust Data - بيانات موثوقة من الإدارة </label>
    </div>
  </div>
  <div class="step-buttons d-flex justify-content-between">
    <button type="button" class="btn btn-secondary prev">Previous </button>
    <button type="button" class="btn btn-secondary next">Next </button>
  </div>
</div>


      <!-- Section 3 -->
      <div class="step-section" id="step3">
        <h4 class="text-secondary mb-3">Administrative Approvals - موافقات  الإدارة</h4>
        <div class="row g-3">
  <div class="col-md-4">
    <label class="form-label">Entitlements - مستحقات</label>
    <input type="text" name="entitlements" class="form-control">
  </div>
  <div class="col-md-4">
    <label class="form-label">Total Entitlements - جملة المستحقات</label>
    <input type="text" name="total_entitlements" class="form-control">
  </div>
  <div class="col-md-4">
    <label class="form-label">Requested Days - عدد الأيام المطلوبة</label>
    <input type="text" name="requested_days" class="form-control">
  </div>
  <div class="col-md-4">
    <label class="form-label">Remaining Entitlements - المستحقات المتبقية</label>
    <input type="text" name="remaining" class="form-control">
  </div>
  <div class="form-check mt-4">
              <input class="form-check-input" type="checkbox" name="administration_trust_data" value="1">
              <label class="form-check-label">administration Trust Data - بيانات موثوقة من الإدارة </label>
            </div>
</div>

        <div class="step-buttons d-flex justify-content-between">
          <button type="button" class="btn btn-secondary prev">Previous - السابق</button>
          <button type="button" class="btn btn-secondary next">Next - التالي</button>
        </div>
      </div>

      <!-- Section 4 -->
      <div class="step-section" id="step4">
        <h4 class="text-secondary mb-3">Status - الحالة</h4>
          <div class="">
    <label class="form-label">CEO Authorization - موافقة المدير العام</label>
    <input type="text" name="ceo_auth" class="form-control">
  </div>
        
        <div class="form-check" style="margin-top: 12px; ">
          <input class="form-check-input" type="radio" name="status" value="pending" checked>
          <label class="form-check-label">Pending - قيد الانتظار</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="status" value="approved">
          <label class="form-check-label">Approved - موافق عليه</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="status" value="rejected">
          <label class="form-check-label">Rejected - مرفوض</label>
        </div>
        <div class="step-buttons d-flex justify-content-between">
          <button type="button" class="btn btn-secondary prev">Previous - السابق</button>
          <button type="submit" class="btn btn-success">Save Holiday Request - حفظ الطلب</button>
        </div>
      </div>

    </form>
  </div>
</div>

<script>
  const steps = document.querySelectorAll('.step-section');
  const progressBar = document.getElementById('progress-bar');
  let currentStep = 0;

  function showStep(step) {
    steps.forEach((s, i) => s.classList.toggle('active', i === step));
    const percent = ((step + 1) / steps.length) * 100;
    progressBar.style.width = percent + '%';
    // progressBar.textContent = `Step ${step + 1} of ${steps.length}`;
  }

  document.querySelectorAll('.next').forEach(btn => {
    btn.addEventListener('click', () => {
      if (currentStep < steps.length - 1) {
        currentStep++;
        showStep(currentStep);
      }
    });
  });

  document.querySelectorAll('.prev').forEach(btn => {
    btn.addEventListener('click', () => {
      if (currentStep > 0) {
        currentStep--;
        showStep(currentStep);
      }
    });
  });

  showStep(currentStep);
</script>

</body>
</html>
