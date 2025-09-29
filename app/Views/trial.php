<?= $this->extend('Shared/layout') ?>

<?= $this->section('content') ?>
<div class="container mt-4">
    <h1 class="mb-4">Plugin Trial Page</h1>

    <!-- Select2 Test -->
    <div class="mb-4">
        <label for="testSelect" class="form-label">Select2 Example</label>
        <select id="testSelect" class="form-select" style="width: 300px;">
            <option value="A">Option A</option>
            <option value="B">Option B</option>
            <option value="C">Option C</option>
        </select>
    </div>

    <!-- DataTables Test -->
    <div class="mb-4">
        <label class="form-label">DataTable Example</label>
        <table id="testTable" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Col1</th>
                    <th>Col2</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>A</td>
                    <td>B</td>
                </tr>
                <tr>
                    <td>C</td>
                    <td>D</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- SweetAlert2 Test -->
    <button id="alertBtn" class="btn btn-success">Test SweetAlert2</button>
</div>
<?= $this->endSection() ?>

<?= $this->section('script'); ?>
<script>
    $(document).ready(function () {
        console.log("jQuery:", $.fn.jquery);
        console.log("Select2:", $.fn.select2 ? "OK" : "NOT LOADED");
        console.log("DataTables:", $.fn.DataTable ? "OK" : "NOT LOADED");
        console.log("Swal:", typeof Swal !== "undefined" ? "OK" : "NOT LOADED");

        // Init Select2
        $('#testSelect').select2();

        // Init DataTables
        try {
            $('#testTable').DataTable();
        } catch (e) {
            console.error("DataTables error:", e);
        }

        // Test SweetAlert2
        $('#alertBtn').click(() => Swal.fire("Hello!", "SweetAlert2 is working 🎉", "success"));
    });
</script>
<?= $this->endSection() ?>
