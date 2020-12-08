</div>
<!-- /Container -->

<!-- Footer -->
@include('includes.footer')
<!-- /Footer -->

</div>
<!-- /Main Content -->

</div>
<!-- /HK Wrapper -->

<!-- jQuery -->
<script src="{{ asset('vendors/jquery/dist/jquery.min.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('vendors/popper.js/dist/umd/popper.min.js') }}"></script>
<script src="{{ asset('vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>

<!-- Jasny-bootstrap  JavaScript -->
<script src="{{ asset('vendors/jasny-bootstrap/dist/js/jasny-bootstrap.min.js') }}"></script>

<!-- Slimscroll JavaScript -->
<script src="{{ asset('dist/js/jquery.slimscroll.js') }}"></script>

<!-- Fancy Dropdown JS -->
<script src="{{ asset('dist/js/dropdown-bootstrap-extended.js') }}"></script>

<!-- FeatherIcons JavaScript -->
<script src="{{ asset('dist/js/feather.min.js') }}"></script>

<!-- Toggles JavaScript -->
<script src="{{ asset('vendors/jquery-toggles/toggles.min.js') }}"></script>
<script src="{{ asset('dist/js/toggle-data.js') }}"></script>

<!-- Init JavaScript -->
<script src="{{ asset('dist/js/init.js') }}"></script>
<script src="{{ asset('dist/js/validation-data.js') }}"></script>

<script src="{{ asset('dist/js/add-admin-user.js') }}"></script>
<script src="{{ asset('dist/js/edit-admin-user.js') }}"></script>
<script src="{{ asset('dist/js/edit-branch.js') }}"></script>
<script src="{{ asset('dist/js/create-loan.js') }}"></script>

@stack('scripts')
</body>

</html>
